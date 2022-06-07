<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commodity;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderComplete;

class CartController extends Controller
{
    public function BswC(){
        if(!Auth::check()){
            return redirect('/Bootstrap-Cut-Login')->with('NoLogin','尚未登入請先登入');

        }

        $Cart = ShoppingCart::orderBy('id','desc')->where('user_id',Auth::user()->id)->get();
        // 判斷購物車有沒有資料
        $Null = ShoppingCart::orderBy('id','desc')->where('user_id',Auth::user()->id)->first();
        // dump($Cart);
        // dd($null);
        //每次從資料庫抓資料出來都應該先DD確認是否抓對。
        $totle_qty = 0;
        $totle_price = 0;
        foreach ($Cart as $value) {
        //i=i+1概念
           $totle_qty = $totle_qty + $value->qty;
        // intval將字串轉數字
        // 每個商品價格乘以訂購的商品數量
           $totle_price = $totle_price + intval($value->commodity->commodity_price)*$value->qty;
        }
        // dd($totle_qty);

        return view('Bootstrap_html_cut.bootstrapWork_pg_cart',compact('Cart','totle_qty','totle_price','Null'));
    }


    public function cartlist_delete($id){

        // where('id', $id)去id裡面找$id的值
        $deleted = ShoppingCart::where('id', $id)->delete();
        // dd($deleted );
        return redirect('/Bootstrap-Cut-cart');

    }

    public function BswCTw(Request $request){
        $Null = ShoppingCart::orderBy('id','desc')->where('user_id',Auth::user()->id)->first();
        // dd($request->all());
        // $qty=$request->qty;
        // dd($qty);
        // session(['amount'=>$qty,'aaa','123']);

        // $car_num = ['AAA123','BBB321','CCC132'];
        // session([
        //     // '變數名稱'=>你要存的資料,
        //     // '第二個變數'=>你要存的資料,
        //     // 'mycar'=>$car_num
        //     // 鍵與值 (key and value)
        //     'amount'=>$request->qty,
        // ]);

        //不使用session 直接將新數量更新購物車資料表
        $cart_commodity = ShoppingCart::where('user_id',Auth::user()->id)->get();
        foreach ($cart_commodity as $key => $item) {
            $item->qty = $request->qty[$key];
            $item->save();
        }

        return view('Bootstrap_html_cut.bootstrapWork_pg_cart_two',compact('Null'));
    }
    public function BswCTr(Request $request){
        // dd($request->all());

        session([
            'pay'=>$request->pay,
            'shipping_way'=>$request->shipping_way,
        ]);

        $shipping_way = $request->shipping_way;


        return view('Bootstrap_html_cut.bootstrapWork_pg_cart_tree',compact('shipping_way'));
    }
    public function BswCF(Request $request){
        // dump(session()->all());

        // dd($request->all());

        //為了計算單價 將購物車根據使用者ID抓出來
        $merch = ShoppingCart::where('user_id', Auth::user()->id)->get();
        // dd($merch);



        //觀念解釋:因為第一步驟數量本身商品順序跟購物車一樣,所以用相同索引值資料互乘加總。
        // 觀念解釋:$amount = session()->get('amount');
        // 觀念解釋:merch[0]->commodity->commodity_price * $amount[0]
        // 觀念解釋:merch[1]->commodity->commodity_price * $amount[1]
        // 觀念解釋:merch[2]->commodity->commodity_price * $amount[2]
        // 觀念解釋:merch[3]->commodity->commodity_price * $amount[3]

        // 利用foreach 將價格和數量乘一起
        // $subtotal = 0;
        // foreach ($merch as $key => $good) {
        //     $subtotal += $good->commodity->commodity_price * session()->get('amount')[$key];
        //     // $key是js foreach中的index，白話為陣列中的key或for的$i變數。
        // }



        //如果購物車的數量有在第一步驟函式BswCTw更新資料表
        //將價格和數量乘一起的作法
        $subtotal = 0;
        foreach ($merch as $value) {
            $subtotal += $value->qty*$value->commodity->commodity_price;
        }


        // 根據取貨方式決定運費金額
        if (session()->get('shipping_way') == "1") {
            $fee = 150;
        }else{
            $fee = 60;
        }

        // //如果要做3000滿額免運
        // if ($subtotal >= 3000) {
        //     $fee = 0;
        // }


        $order = Order::create([
            'commodity_price'=>$subtotal,
            'shipping_fee'=>$fee,
            'price_total'=>$subtotal + $fee,
            // 'qty'=> count(session()->get('amount')),
            'qty'=> count($merch),
            'user_name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'pay_way'=>session()->get('pay'),
            'shipping_way'=>session()->get('shipping_way'),
            'status'=> 1,
            'user_id'=>Auth::id(),
        ]);
        // address 和store_address還沒存
        if($order->shipping_way == 1){
            // 如果運送方式shipping_way是1為黑貓宅急便，地址要填入address
            $order->address = $request->code.$request->city.$request->address;
        }else{
            // 如果運送方式shipping_way是2為商店，地址要填入store_address
            $order->store_address = $request->code.$request->city.$request->address;
        }
        $order->save();

        //雖然訂單的主資料內容已經找齊並存好，但尚未把購買明細準備好。
        foreach($merch as $key => $value){
            Order_detail::create([
                'commodity_id' => $value->commodity->id,
                'qty' => $value->qty,
                'price' => $value->commodity->commodity_price,
                'order_id' =>$order->id,
            ]);
        }

        $data = [
            'user_name'=>Auth::user()->name,
            'order_id' =>$order->id,
            'subject' => '用laravel寄了一封信給你A_A',
        ];

        // dd($order->id);

        //訂單建立主動將購物車資料清除
        ShoppingCart::where('user_id',Auth::user()->id)->delete();


        // Mail::to('andy.the.night@gmail.com')->send(new OrderComplete($data));
        // Mail::to('ZeroRockLaser@gmail.com')->send(new OrderComplete);
        // Mail::to(Auth::user()->email)->send(new OrderComplete($data));
        // Mail::to('andrew33673367@gmail.com')->send(new OrderComplete($data));
        // dd(Auth::user()->email);

        return redirect('/show_order/'.$order->id);
    }

    public function show_order($id){
        $order = Order::find($id);
        // dump($order);
        // foreach ($order->detail as $key => $item) {
        //     $p = $item->product;
        //     dump($item);
        //     dump($item->product);
        //     // dump($item->product->img_path);
        //     dd();


        // }
        return view('Bootstrap_html_cut.bootstrapWork_pg_cart_four',compact('order'));
    }

}

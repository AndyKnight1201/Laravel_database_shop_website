<?php

namespace App\Http\Controllers;

// use寫法，每個檔案名稱第一個字必須大寫(即使真實名稱不是大寫)，其他必需小寫。
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\chat;
use App\Models\Commodity;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Order_detail;


class BootstrapCut_Controller extends Controller
{
    // 斜線也可以讀資料夾內檔案
    // public function BswL(){
    //     return view('Bootstrap_html_cut/bootstrapWork_pg_login');
    // }

    public function BswI(){
        // 用 Controller把資料庫資料抓取，並印在網頁上
        // get()是回傳陣列
        // $dataAll = DB::table('news')->get();
        // find專找ID
        // $data1 = DB::table('news')->find(1);
        $data = DB::table('news')->take(3)->get();
        // $data3 = DB::table('news')->skip(2)->take(3)->get();;
        // $data4 = DB::table('news')->orderBy('id','desc')->take(3)->get();
        // $data5 = DB::table('news')->inRandomOrder()->take(3)->get();
        // $data6 = DB::table('news')->take(3);
        // $data7 = DB::table('news');

        // dd($dataAll,$data1,$data,$data3,$data4,$data5,$data6,$data7);
        // dd($data);
        // 資料庫資料導入網頁顯示
        // 寫法1
        // return view('Bootstrap_html_cut.bootstrapWork_index_fin',['title'=>$data,'content'=>$data,'img'=>$data]);
        // 寫法2
        // return view('Bootstrap_html_cut.bootstrapWork_index_fin')->with('title',$data)->with('content',$data)->with('img',$data);
        // 寫法3

        $commodity = Commodity::orderBy('id','desc')->take(8)->get();
        $commodityone = Commodity::inRandomOrder()->first();

        return view('Bootstrap_html_cut.bootstrapWork_index_fin',compact('data','commodity','commodityone'));
        // return view('Bootstrap_html_cut.bootstrapWork_index_fin',compact('commodity','commodityone'))->with('title',$data)->with('content',$data)->with('img',$data);


    }

    // public function BswC(){
    //     if(!Auth::check()){
    //         return redirect('/Bootstrap-Cut-Login')->with('NoLogin','尚未登入請先登入');
    //     }

    //     $Cart = ShoppingCart::orderBy('id','desc')->where('user_id',Auth::user()->id)->get();
    //     //每次從資料庫抓資料出來都應該先DD確認是否抓對。
    //     $totle_qty = 0;
    //     $totle_price = 0;

    //     foreach ($Cart as $value) {
    //     //i=i+1概念
    //        $totle_qty = $totle_qty + $value->qty;
    //     // intval將字串轉數字
    //     // 每個商品價格乘以訂購的商品數量
    //        $totle_price = $totle_price + intval($value->commodity->commodity_price)*$value->qty;
    //     }
    //     // dd($totle_qty);

    //     return view('Bootstrap_html_cut.bootstrapWork_pg_cart',compact('Cart','totle_qty','totle_price'));
    // }
    // public function cartlist_delete($id){

    //     // where('id', $id)去id裡面找$id的值
    //     $deleted = ShoppingCart::where('id', $id)->delete();
    //     // dd($deleted );
    //     return redirect('/Bootstrap-Cut-cart');

    // }

    // public function BswCTw(Request $request){
    //     // dd($request->all());
    //     // $qty=$request->qty;
    //     // dd($qty);
    //     // session(['amount'=>$qty,'aaa','123']);

    //     // $car_num = ['AAA123','BBB321','CCC132'];
    //     // session([
    //     //     // '變數名稱'=>你要存的資料,
    //     //     // '第二個變數'=>你要存的資料,
    //     //     // 'mycar'=>$car_num
    //     //     // 鍵與值 (key and value)
    //     //     'amount'=>$request->qty,
    //     // ]);

    //     //不使用session 直接將新數量更新購物車資料表
    //     $cart_commodity = ShoppingCart::where('user_id',Auth::user()->id)->get();
    //     foreach ($cart_commodity as $key => $item) {
    //         $item->qty = $request->qty[$key];
    //         $item->save();
    //     }

    //     return view('Bootstrap_html_cut.bootstrapWork_pg_cart_two');
    // }
    // public function BswCTr(Request $request){
    //     // dd($request->all());

    //     session([
    //         'pay'=>$request->pay,
    //         'shipping_way'=>$request->shipping_way,
    //     ]);

    //     $shipping_way = $request->shipping_way;


    //     return view('Bootstrap_html_cut.bootstrapWork_pg_cart_tree',compact('shipping_way'));
    // }
    // public function BswCF(Request $request){
    //     // dump(session()->all());

    //     // dd($request->all());

    //     //為了計算單價 將購物車根據使用者ID抓出來
    //     $merch = ShoppingCart::where('user_id', Auth::user()->id)->get();
    //     // dd($merch);



    //     //觀念解釋:因為第一步驟數量本身商品順序跟購物車一樣,所以用相同索引值資料互乘加總。
    //     // 觀念解釋:$amount = session()->get('amount');
    //     // 觀念解釋:merch[0]->commodity->commodity_price * $amount[0]
    //     // 觀念解釋:merch[1]->commodity->commodity_price * $amount[1]
    //     // 觀念解釋:merch[2]->commodity->commodity_price * $amount[2]
    //     // 觀念解釋:merch[3]->commodity->commodity_price * $amount[3]

    //     // 利用foreach 將價格和數量乘一起
    //     // $subtotal = 0;
    //     // foreach ($merch as $key => $good) {
    //     //     $subtotal += $good->commodity->commodity_price * session()->get('amount')[$key];
    //     //     // $key是js foreach中的index，白話為陣列中的key或for的$i變數。
    //     // }



    //     //如果購物車的數量有在第一步驟函式BswCTw更新資料表
    //     //將價格和數量乘一起的作法
    //     $subtotal = 0;
    //     foreach ($merch as $value) {
    //         $subtotal += $value->qty*$value->commodity->commodity_price;
    //     }


    //     // 根據取貨方式決定運費金額
    //     if (session()->get('shipping_way') == "1") {
    //         $fee = 150;
    //     }else{
    //         $fee = 60;
    //     }

    //     // //如果要做3000滿額免運
    //     // if ($subtotal >= 3000) {
    //     //     $fee = 0;
    //     // }


    //     $order = Order::create([
    //         'commodity_price'=>$subtotal,
    //         'shipping_fee'=>$fee,
    //         'price_total'=>$subtotal + $fee,
    //         // 'qty'=> count(session()->get('amount')),
    //         'qty'=> count($merch),
    //         'user_name'=>$request->name,
    //         'phone'=>$request->phone,
    //         'email'=>$request->email,
    //         'pay_way'=>session()->get('pay'),
    //         'shipping_way'=>session()->get('shipping_way'),
    //         'status'=> 1,
    //         'user_id'=>Auth::id(),
    //     ]);
    //     // address 和store_address還沒存
    //     if($order->shipping_way == 1){
    //         // 如果運送方式shipping_way是1為黑貓宅急便，地址要填入address
    //         $order->address = $request->code.$request->city.$request->address;
    //     }else{
    //         // 如果運送方式shipping_way是2為商店，地址要填入store_address
    //         $order->store_address = $request->code.$request->city.$request->address;
    //     }
    //     $order->save();

    //     //雖然訂單的主資料內容已經找齊並存好，但尚未把購買明細準備好。
    //     foreach($merch as $key => $value){
    //         Order_detail::create([
    //             'commodity_id' => $value->commodity->id,
    //             'qty' => $value->qty,
    //             'price' => $value->commodity->commodity_price,
    //             'order_id' =>$order->id,
    //         ]);
    //     }

    //     // dd($order->id);

    //     //訂單建立主動將購物車資料清除
    //     ShoppingCart::where('user_id',Auth::user()->id)->delete();

    //     return redirect('/show_order/'.$order->id);
    // }

    // public function show_order($id){
    //     $order = Order::find($id);
    //     // dump($order);
    //     // foreach ($order->detail as $key => $item) {
    //     //     $p = $item->product;
    //     //     dump($item);
    //     //     dump($item->product);
    //     //     // dump($item->product->img_path);
    //     //     dd();


    //     // }
    //     return view('Bootstrap_html_cut.bootstrapWork_pg_cart_four',compact('order'));
    // }






    public function BswCh(){
        $chat = chat::orderBy('id','desc')->get();
        // dd($chat);
        return view('Bootstrap_html_cut.bootstrapWork_pg_chat',compact('chat'));
    }

    // 貯存留言至資料表
    public function BswCh_save(Request $request){
        // dd($request);
        // DB::table('chats')->insert([
        //     'title' =>$request->title,
        //     'name' =>$request->name,
        //     'content' =>$request->content,
        //     'email' =>'',
        // ]);

        chat::create([
            'title' =>$request->title,
            'name' =>$request->name,
            'content' =>$request->content,
            'email' =>'',
        ]);


        // redirect為重新導向，與view不同
        return redirect('/Bootstrap-Cut-chat');

    }

    // 刪除留言
    public function BswCh_delete($id){

        // where('id', $id)去id裡面找$id的值
        $deleted = chat::where('id', $id)->delete();
        // dd($deleted );
        return redirect('/Bootstrap-Cut-chat');

    }

    // 導向編輯留言頁面並帶入欲編輯資料
    public function BswCh_edit($id){

        // first()抓取陣列資料中的第一筆或從符合條件的筆數中抓第一筆
        // $chatedit = chat::where('id', $id)->first();
        //回傳回來的數值只有一筆

        $chatedit = DB::table('chats')->find($id);
        // dd($chatedit);
        return view('Bootstrap_html_cut.bootstrapWork_pg_chat_change',compact('chatedit'));

        //用設定陣列第0項的方式指定內容
        // return view('Bootstrap_html_cut.bootstrapWork_pg_cart_chat_change',['chatedit'=>$chatedit[0]]);

    }

    public function BswCh_updata($id,Request $request){

        // update只能用where
        chat::where('id', $id)->update([

            'title' =>$request->title,
            'name' =>$request->name,
            'content' =>$request->content,
            'email' =>'',

        ]);

        // DB不能使用這個操作，但是model可以
        // $chatedit = DB::table('chats')->find($id);
        // $chatedit->title = $request->title;
        // $chatedit->name = $request->name;
        // $chatedit->content = $request->content;
        // $chatedit->save();

        return redirect('/Bootstrap-Cut-chat');

    }




}

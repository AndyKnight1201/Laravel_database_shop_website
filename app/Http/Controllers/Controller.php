<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Commodity;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use App\Models\Order;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('welcome');
    }

    public function BswL(){
        return view('Bootstrap_html_cut.bootstrapWork_pg_login');
    }


    public function CommodityInner($id)
    {
        $CommodityInf = Commodity::find($id);
        // dd($CommodityInf->id);
        $commodity = Commodity::orderBy('id','desc')->get();
        return view('commodity.commodity_inner',compact('CommodityInf','commodity'));
    }


    public function add_cart(Request $request)
    {
        $Commodity = Commodity::find($request->commodity_id);

        if($request->add_qty > $Commodity->quantity){
            $result = [
                'result' => 'error',
                'meessage' =>'欲購買數量超過庫存',
            ];
            return $result;

        }elseif($request->add_qty < 1){
            $result = [
                'result' => 'error',
                'meessage' =>'購買數量異常',
            ];
            return $result;
        }

        if(!Auth::check()){
            $result = [
                'result' => 'error',
                'meessage' =>'商未登入請先登入',
            ];
            return $result;
        }

        ShoppingCart::create([
            'commodity_id'=>$request->commodity_id,
            'user_id'=> Auth::user()->id,
            'qty'=>$request->add_qty,
        ]);

        $result = [
            'result' => 'success',
        ];
        return $result;

    }

    public function order_list(){
        $order = Order::where('user_id',Auth::id())->get();
        return view('order.order_list',compact('order'));
    }

}




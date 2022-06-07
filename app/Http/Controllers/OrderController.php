<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{

    public function index()
    {
        $order = Order::orderBy('id','desc')->get();
        $header = '訂單管理';
        $slot ='這倒底是三小';

        return view('order.order_index',compact('order','header','slot'));
    }


    public function edit($id)
    {
        $order = Order::find($id);
        $header = '訂單管理';
        $slot = '這倒底是三小';

        return view('order.order_edit',compact('order','header','slot'));
    }


    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->ps = $request->ps;
        $order->save();
        return redirect('/order');
    }


}

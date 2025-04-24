<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Role;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function order(Request $request) {
        $order_id = $request->get('id');
        $order = Order::find($order_id);

       $data = [
           'order' => $order,
           'users' => $order->users
       ];

        return view('order.read', $data);
    }
}

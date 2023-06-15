<?php

namespace App\Http\Controllers\admin;

use App\Order;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Order $order, Product $product)
    {
        $products = Product::orderByDesc('name')->get();
        $orders = Order::orderByDesc('id')->paginate(10);
        
        return view(
            'admin.orders.index',
            [
                'orders' => $orders
            ]
        );
    }
    public function show(Order $order){
        return view('admin.orders.show', [
            'order' => $order
        ]);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index');
    }
        
}

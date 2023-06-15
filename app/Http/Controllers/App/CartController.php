<?php

namespace App\Http\Controllers\App;

use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::find(Session::get('products') ?? [])->where('status', '=', 'active');

        return view(
            'app.cart',
            [
                'products' => $products,
                'categories' => $categories

            ]
        );
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'product' => 'required|numeric|exists:products,id'
        ]);

        $products = Session::get('products') ?? [];
        array_push($products, $data['product']);
        $filteredProducts = array_unique($products);

        Session::put('products', $filteredProducts);

        return redirect()->route('app.cart.index');
    }

    public function remove(Request $request)
    {
        $data = $request->validate([
            'product' => 'required|numeric|exists:products,id'
        ]);

        $products = Session::get('products') ?? [];
        $productIndex = array_search($data['product'], $products);
        unset($products[$productIndex]);

        Session::put('products', $products);

        return redirect()->route('app.cart.index');
    }

    public function order(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string|max:255",
            'phone' => "required|digits:9",
        ]);

        $order = Order::create($data);
        $order->products()->attach(Session::get('products'));
        Session::put('products', []);

        return redirect()->route('app.home');
    }
}

<?php

namespace App\Http\Controllers\App;

use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('activeProducts')->get();
        return view(
            'app.index',
            [
                'categories' => $categories
            ]
        );
    }


    public function search(Request $request, Product $product)
    {
        $categories = Category::orderByDesc('id')->with('products')->get();
        $search = $request->input('search');
        $products = Product::where('name', 'LIKE', "%{$search}%")->orderBy('name')->get();
        return view(
            'app.search',
            [
                'products' => $products
            ],
            [
                'categories' => $categories
            ]
        );
    }
}

<?php

namespace App\Http\Controllers\App;

use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function ajax(Request $request)
    {
        $products = Product::where('category_id', '=', $request->category_id)->where('status', '=', 'active')->paginate(8);

        $resource = ProductResource::collection($products);

        return response()->json([
            'data' => $resource
        ]);
    }
}

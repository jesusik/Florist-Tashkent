<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product){
        $products = Product::orderByDesc('id')->with('category')->paginate(10);
        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    public function create(Category $category)
    {
        $categories = Category::orderByDesc('name')->get();
        return view('admin.products.create', [
            'categories' => $categories
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'required|image',
            'category_id' => 'required|numeric|exists:categories,id',
            'status' => 'required|string|max:255',
        ]);

        $data['photo'] = Product::savePhoto($data['photo']);
        
        $product = Product::create($data);
        return redirect()->route('admin.products.show', [$product]);
    }
    public function show(Product $product){
        $categories = Category::orderByDesc('name')->get();

        return view('admin.products.show', [
            'product' => $product, 'categories' => $categories
        ]);
    }

    public function edit(Product $product){
        $categories = Category::orderByDesc('name')->get();

        return view('admin.products.edit', [
            'product' => $product, 'categories' => $categories
        ]);
    }

    public function update(Request $request, Product $product){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'image|nullable',
            'category_id' => 'required|numeric|exists:categories,id',
            'status' => 'required|string|max:255',
        ]);
        if (isset($data['photo'])) {
            $data['photo'] = Product::savePhoto($data['photo']);
        }else{
            unset($data['photo']);
        }
        $product->update($data);

        return redirect()->route('admin.products.show', [$product]);
    }


    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}

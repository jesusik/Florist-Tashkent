<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category){
        $categories = Category::orderByDesc('id')->paginate(10);
        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }
    public function create(){
        return view('admin.categories.create');
    }

    public function store(Request $request){
        $data = $request->validate(['name' => 'required|string|max:255']);
       
        $category = Category::create($data);

        return redirect()->route('admin.categories.show',[$category]);
    }

    public function show(Category $category){
        return view('admin.categories.show', [
            'category' => $category
        ]);
    }

    public function edit(Category $category){
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category){
        $data = $request->validate(['name' => 'required|string|max:255']);
 
        $category->update($data);

        return redirect()->route('admin.categories.show', [$category]);
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}

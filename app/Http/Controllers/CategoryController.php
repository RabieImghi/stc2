<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.Catetegory' , compact('categories'));
    }
    public function addCategory(Request $request) {
        $request->validate([
            'name' => 'required|unique:categories,name'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/Category');
    }
    public function deleteCategory(Request $request) {
        $request->validate([
            'id' => 'required'
        ]);
        $category = Category::find($request->id);
        $category->delete();
        return redirect('/Category');
    }
    public function updateCategory(Request $request) {
        $request->validate([
            'id' => 'required',
            'name' => 'required|unique:categories,name'
        ]);
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect('/Category');
    }
}

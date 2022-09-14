<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function listProduct(){
        $categories=Category::all();
        return view('list-products',compact("categories"));
    }

    public function formAddCategory(){
        return view('add-category');
    }

    public function addCategory(Request $request){
        $category = new Category();
        $category->name_category = $request->name_category;
        $category->detail = $request->detail;

        $category->save();
        $alert='Bạn đã thêm thành công loại sản phẩm!';
        return redirect()->route('list-products')->with('alert',$alert);
    }

    public function formEditCategory(Request $request) {
        $category = Category::find($request->get('id'));
        return view('category', compact('category'));
    }

    public function editCategory($id,Request $request){
        // $categories->update($request->all());
        $category = Category::find($id);
        $category->name_category = $request->get('name_category');
        $category->detail = $request->get('detail');
        $category->save();
        $alert='Bạn đã sửa thành công loại sản phẩm!';
        return redirect()->route('list-products')->with('alert',$alert);
    }
}

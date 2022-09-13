<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function formAddCategory(){
        return view('add-category');
    }

    public function addCategory(Request $request){
        $category = new Category();
        $category->name_category = $request->name_category;
        $category->detail = $request->detail;

        $category->save();
        $alert='Bạn đã thêm thành công loại sản phẩm!';
        return redirect()->route('form-add-category')->with('alert',$alert);

    }
}

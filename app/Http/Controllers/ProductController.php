<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('add-product',compact('category'));
    }

    public function store(Request $request){
        $product = new Product();
        $product->name_product = $request->name_product;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->stock = $request->stock;
        
        $product->save();
        $alert='Bạn đã thêm thành công sản phẩm!';
        return redirect()->route('list-products')->with('alert',$alert);
    } 
    
    
}

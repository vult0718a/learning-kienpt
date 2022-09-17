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
    
    public function edit(Request $request){
        $product = Product::find($request->get('id'));
        $category = Category::all();
        return view('edit-product',compact('product','category'));
    }

    public function update($id,Request $request){
        $product = Product::find($id);
        $product->name_product = $request->get('name_product');
        $product->detail = $request->get('detail');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category_id');
        $product->stock = $request->get('stock');

        $product->save();
        $alert='Bạn đã sửa thành công loại sản phẩm!';
        return redirect()->route('list-products')->with('alert',$alert); 
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        $alert='Bạn đã xóa thành công sản phẩm!';
        return redirect()->route('list-products')->with('alert',$alert);
    }
}

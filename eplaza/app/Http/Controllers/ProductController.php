<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        
        $products = Product::all();
        return view('admin.product.list', compact('products'));
    }
    public function add(Request $req)
    {
        $product = new Product;
        $product->title = $req->title;
        $product->caption = $req->caption;
        $product->price = $req->price;
        $product->src = $req->src;
        $product->catagory = $req->catagory;

        $product->save();
        return redirect('/product/list');

    }

    public function edit(Request $req)
    {
        $editData = Product::find($req->id); 
        return view('admin.product.edit', compact('editData'));
    }

    public function update(Request $req)
    {
        $product = Product::find($req->id);
        $product->title = $req->title;
        $product->caption = $req->caption;
        $product->price = $req->price;
        $product->src = $req->src;
        $product->catagory = $req->catagory;

        $product->update();
        return redirect('/product/list');
    }

    public function delete(Request $req){
        Product::find($req->id)->delete();

        return redirect('/product/list');
    }
}

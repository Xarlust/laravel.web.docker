<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.products', [
            'products' => $products
        ]);

    }

    public function create(Product $product)
    {
        return view('admin.product_editor', [
            'product' => $product,
            'action' => 'create'
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:40',
            'price' => 'required|numeric',
            'description' => 'required|max:60',
            'file_path' => 'required|mimes:jpg,jpeg,png,bmp|max:2048'
        ]);

        $file_path = '/storage/' . $request->file('file_path')->storeAs('uploads', time() . '_' . $request->file_path->getClientOriginalName(), 'public');

        $data=$request->only([
            'name',
            'price',
            'description',
        ]);

        $data['file_path']=$file_path;
        $product=new Product($data);
        $product->save();
        $products = Product::all();

        return view('admin.products', [
            'products' => $products,

        ]);
    }


    public function edit(Product $product)
    {
        return view('admin.product_editor', [
            'product' => $product,
            'action' => 'edit'
        ]);
    }

    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => 'required|max:40',
            'price' => 'required|numeric',
            'description' => 'required|max:60',
            'file_path' => 'required|mimes:jpg,jpeg,png,bmp|max:2048'
        ]);

        $file_path = '/storage/' . $request->file('file_path')->storeAs('uploads', time() . '_' . $request->file_path->getClientOriginalName(), 'public');

        $data=$request->only([
            'name',
            'price',
            'description',
        ]);

        $data['file_path']=$file_path;
        $product->update($data);


        $products = Product::all();

        return view('admin.products', [
            'products' => $products,
        ]);
    }

    public function destroy(Product $product)
    {

        $product->delete();
        $products = Product::all();
        return view('admin.products', [
            'products' => $products,
        ]);
    }


}

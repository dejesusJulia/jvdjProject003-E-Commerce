<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\ProductType;

class ProductController extends Controller
{
    public function index(){
        // show all PRODUCTS (CLIENT SIDE)
    }

    public function indexSingle(){
        // show single PRODUCT (CLIENT SIDE)
    }

    public function show(){
        // show all PRODUCTS (SERVER SIDE)
        // $products = Product::all();
        $products = Product::with('product_types')->get();
        return view('manager.products', compact('products'));
    }

    public function showSingle(){
        // show single PRODUCT (SERVER SIDE)
        return view('manager.product-view');
    }

    public function create(){
        return view('manager.product-add');
    }

    public function store(Request $request){
        // add PRODUCT (SERVER SIDE)
        $request->file('product_img')->store('images', 'public');
        $details = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'product_img' => $request->product_img->hashName(),
            'product_type_id' => $request->product_type_id
        ];
        Product::create($details);
        return redirect(route('manager.products'))->with('successMsg', 'Product added successfully!');
    }

    public function edit(Product $product){
        // return view with variables to edit PRODUCT (SERVER SIDE)
        $ptypes = ProductType::all();
        $myarr = [$product, $ptypes];
        return view('manager.product-update', compact('myarr'));
    }

    public function update(Request $request, Product $product){
        // update PRODUCT (SERVER SIDE)
        $img = $request->file('product_img')->hashName();
        if($product->product_img !== null && $product->product_img !== $img){
            Storage::delete('/public/images/' . $product->product_img);
        }
        
        $request->file('product_img')->store('images', 'public');

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'product_img' => $img,
            'product_type_id' => $request->product_type_id
        ]);

        return redirect(route('manager.products'))->with('successMsg', 'Product updated successfully');

    }

    public function destroy(Product $product){
        // delete PRODUCT (SERVER SIDE)
        $product->delete();
        return redirect()->back()->with('successMsg', 'Product deleted successfully!');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;

class ProductTypeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        // show all PRODUCT TYPES
        $productTypes = ProductType::all();
        return view('admin.product-types', compact('productTypes'));
    }

    public function show(){
        // show one PRODUCT TYPE and all its PRODUCTS
    }

    public function addSelectType(){
        // get all product types for Manager page
        $productTypes = ProductType::all();
        return view('manager.product-add', compact('productTypes'));
    }

    public function store(Request $request){
        // create PRODUCT TYPE
        ProductType::create($request->all());
        return redirect()->back()->with('successMsg', 'Product type added successfully!');
    }

    public function edit(ProductType $productType){
        // return view with variables to be edited
        return view('admin.product-type-update', compact('productType'));
    }

    public function update(Request $request, ProductType $productType){
        // update PRODUCT TYPE
        $productType->update(['type' => $request->type]);

        return redirect(route('admin.producttypes'))->with('successMsg', 'Product type updated successfully!');
    }

    public function destroy(ProductType $productType){
        // delete PRODUCT TYPE
        $productType->delete();

        return redirect()->back()->with('successMsg', 'Product type is successfully deleted!');

    }
}

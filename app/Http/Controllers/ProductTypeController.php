<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        // show all PRODUCT TYPES
        return view('admin.product-types');
    }

    public function show(){
        // show one PRODUCT TYPE and all its PRODUCTS
    }

    public function store(){
        // create PRODUCT TYPE
    }

    public function edit(){
        // return view with variables to be edited
        return view('admin.product-type-update');
    }

    public function update(){
        // update PRODUCT TYPE
    }

    public function destroy(){
        // delete PRODUCT TYPE
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('manager.products');
    }

    public function showSingle(){
        // show single PRODUCT (SERVER SIDE)
        return view('manager.product-view');
    }

    public function store(){
        // add PRODUCT (SERVER SIDE)
    }

    public function edit(){
        // return view with variables to edit PRODUCT (SERVER SIDE)
        return view('manager.product-update');
    }

    public function update(){
        // update PRODUCT (SERVER SIDE)
    }

    public function destroy(){
        // delete PRODUCT (SERVER SIDE)
    }
}


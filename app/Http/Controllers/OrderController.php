<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        // show all ORDERS (CLIENT SIDE)
    }

    public function show(){
        // show all ORDERS (SERVER SIDE)
    }

    public function showSingle(){
        // show single ORDER (CLIENT SIDE)
    }

    public function store(){
        // add ORDER (CLIENT SIDE)
    }

    public function update(){
        // update ORDER checkout status (CLIENT SIDE)
    }

    public function complete(){
        // update ORDER completion status (SERVER SIDE)
    }

    public function undoOrder(){
        // undo ORDER (CLIENT SIDE)
    }

    public function destroy(){
        // delete ORDER from list (SERVER SIDE)
    }
}

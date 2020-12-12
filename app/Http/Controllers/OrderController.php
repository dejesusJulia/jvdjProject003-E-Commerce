<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        // show all ORDERS (CLIENT SIDE)
        return view('user.user-orders');
    }

    public function show(){
        // show all ORDERS (SERVER SIDE)
        return view('manager.orders');
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

    public function editOrder(){
        // return view of ORDER to be edited (SERVER SIDE)
        return view('manager.order-update');
    }

    public function updateOrder(){
        // update ORDER completion status (SERVER SIDE)
    }

    public function undoOrder(){
        // undo ORDER (CLIENT SIDE)
    }

    public function destroy(){
        // delete ORDER from list (SERVER SIDE)
    }
}

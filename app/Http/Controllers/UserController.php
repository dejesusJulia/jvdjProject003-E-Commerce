<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // code
    }

    public function show(){
        return view('admin.users');
    }

    public function editProfile(){
        // return view with variables to be edited
    }

    public function updateProfile(){
        // update user profile
    }

    public function editRole(){
        return view('admin.user-update');
    }

    public function updateRole(){
        // update user profile
    }
}

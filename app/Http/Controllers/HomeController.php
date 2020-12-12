<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        return view('welcome');
    }

    public function indexUser()
    {
        return view('home');
    }

    public function indexAdmin(){
        // session(['key' => 'value']);
        // $value = session('key');
        return view('admin.dashboard');
    }

    public function indexManager(){
        return view('manager.home');
    }
}

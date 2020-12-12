@extends('layouts.app')

@section('content')
    <div class="container">
        <x-alert/>
        <div class="card">
            <div class="card-body">
                <h1>Welcome, manager!</h1>
            </div>
        </div>


        <h3>Temporary nav</h3>

        <ul>
            <li>
                <a href="{{route('manager.orders')}}">Orders</a>
            </li>

            <li>
                <a href="{{route('manager.products')}}">Products</a>
            </li>

            <li>
                <a href="{{route('manager.profile', Auth::user()->id)}}">{{Auth::user()->id}}</a>
            </li>

            
        </ul>
    </div>
    
@endsection
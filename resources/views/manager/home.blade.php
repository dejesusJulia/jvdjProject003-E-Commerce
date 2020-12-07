@extends('layouts.app')

@section('content')
    <div class="container">
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
        </ul>
    </div>
    
@endsection
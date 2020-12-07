@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Welcome, admin!</h1>
            </div>
        </div>

        <h3>Temporary nav</h3>
        <ul>
            <li>
                <a href="{{route('admin.producttypes')}}">product types</a>
            </li>

            <li>
                <a href="{{route('admin.users')}}">users</a>
            </li>

            <li>
                <a href="{{url('/')}}">Landing page</a>
            </li>
        </ul>
        
    </div>
    
@endsection
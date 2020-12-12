@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header d-flex justify-content-space-between">
                    <h3 class="mr-auto">Profile</h3>
                    <a href="{{route('user.home')}}">&leftarrow;</a>
                </div>

                <div class="card-body">
                    <form action="{{route('user.profileupdate', $user->id)}}" method="post" class="form">

                        @csrf
                        @method('patch')
                        
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Type your name here" class="form-control" value="{{$user->name}}">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Type your email here" class="form-control" value="{{$user->email}}">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Update profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
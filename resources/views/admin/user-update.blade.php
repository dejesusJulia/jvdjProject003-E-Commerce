@extends('layouts.admin')

@section('content')
   
    <div class="container mx-auto my-2">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="mr-auto">
                        <h3>{{$user->name}}</h3>
                        <small>{{$user->email}}</small>
                    </div>
                    <a href="{{route('admin.users')}}">&leftarrow;</a>
                </div>

                <div class="card-body">
                    <h4>Role</h4>
                    <?php
                    $roles = ['admin', 'manager', 'user'];
                    ?>
                    <form action="{{route('admin.userupdate', $user->id)}}" method="POST" class="form">            
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <select name="user_role" id="user_role" class="custom-select">                               
                                <option value="{{$roles[0]}}" {{$roles[0] === $user->user_role ? 'selected' : ''}}>{{$roles[0]}}</option>

                                <option value="{{$roles[1]}}" {{$roles[1] === $user->user_role ? 'selected' : ''}}>{{$roles[1]}}</option>

                                <option value="{{$roles[2]}}" {{$roles[2] === $user->user_role ? 'selected' : ''}}>{{$roles[2]}}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" id="update-user-btn">Update role</button>
                    </form>
         
                </div>
            </div>
        </div>
    </div>
@endsection
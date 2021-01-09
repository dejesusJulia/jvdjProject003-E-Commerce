@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-8 offset-2">
            <x-alert/>
            <table class="table table-striped">
                <thead>
                    <th class="text-center">ID</th>
                    <th class="text-center">NAME</th>
                    <th class="text-center">EMAIL</th>
                    <th class="text-center">ROLE</th>
                    <th></th>
                </thead>
    
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{$user->id}}</td>
                        <td class="text-center">{{$user->name}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        <td class="text-center">{{$user->user_role}}</td>
                        
                        @if (Auth::user()->id !== $user->id)
                            <td class="d-flex justify-content-center">
                                <a href="{{route('admin.profile', $user->id)}}" class="mx-1">
                                    <i class="fas fa-cog"></i>
                                </a>

                            <button class="mx-1 btn btn-danger" onclick="event.preventDefault();
                            if(confirm('Do you want to delete {{$user->email}}?')){document.getElementById('user-del-{{$user->id}}').submit()
                            }">
                                <i class="fas fa-times"></i>
                            </button>

                            <form id="user-del-{{$user->id}}" action="{{route('admin.userdelete', $user->id)}}" method="post" style="display:none;">
                                @csrf
                                @method('delete')
                            </form>
                            </td> 
                        @else
                        <td class="text-center">
                            <a href="{{route('admin.profile', $user->id)}}">Update profile</a>
                        </td>
                        @endif
                        
                    </tr>
                    @endforeach       
                </tbody>
            </table>
        </div>
    </div>
@endsection

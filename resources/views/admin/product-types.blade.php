@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-8 offset-2">
            <x-alert/>
            <table class="table table-striped">
                <thead>
                    <th class="text-center">ID</th>
                    <th class="text-center">Type name</th>
                    <th></th>
                </thead>

                <tbody>
                    @forelse ($productTypes as $productType)
                    <tr>
                        <td class="text-center">{{$productType->id}}</td>
                        <td class="text-center">{{$productType->type}}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{route('admin.producttypeedit', $productType->id)}}" class="btn btn-info btn-sm mx-1">
                                <i class="fas fa-cog"></i>
                            </a>

                            <button class="btn btn-sm btn-danger mx-1" onclick="event.preventDefault();
                            if(confirm('Do you want to delete {{$productType->type}}?')){
                                document.getElementById('form-pt-delete-{{$productType->id}}').submit()
                            }">
                                <i class="fas fa-times"></i>
                            </button>

                            <form id="{{'form-pt-delete-' . $productType->id}}" action="{{route('admin.producttypedelete', $productType->id)}}" method="post" style="display: hidden;">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                        
                    @empty
                    <tr>
                        <td class="text-center">#</td>
                        <td class="text-center">NO PRODUCT TYPE</td>
                        <td class="text-center"></td>
                    </tr>
        
                    @endforelse
                </tbody>
            </table>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add product type</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.producttypeadd')}}" class="form" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="type" id="type" class="form-control">
                            <div class="input-group-append">
                                <button class="btn btn-primary">&plus;</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
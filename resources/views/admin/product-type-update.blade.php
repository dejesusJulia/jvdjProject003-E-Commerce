@extends('layouts.admin')

@section('content')
    <div class="container mx-auto my-2">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header d-flex">
                    <h3 class="card-title mr-auto">Product type Update</h3>
                    <a href="{{route('admin.producttypes')}}">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.producttypeupdate', $productType->id)}}" class="form" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" name="type" id="type_edit" class="form-control" value="{{$productType->type}}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')

@section('content')
    <div class="container mx-auto my-2">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product type Update</h3>
                </div>

                <div class="card-body">
                    <form action="" class="form">
                        <div class="form-group">
                            <input type="text" name="type" id="type_edit" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
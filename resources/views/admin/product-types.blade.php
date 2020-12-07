@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-8 offset-2">
            <ul class="list-group mx-auto">
                <div class="list-group-item">Lorem ipsum</div>
                <div class="list-group-item">Lorem ipsum</div>
                <div class="list-group-item">Lorem ipsum</div>
                <div class="list-group-item">Lorem ipsum</div>
                <div class="list-group-item">Lorem ipsum</div>
            </ul>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add product type</h3>
                </div>
                <div class="card-body">
                    <form action="" class="form">
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
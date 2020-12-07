@extends('layouts.manager')

@section('content')
    <div class="container mx-auto my-2">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update product</h3>
                </div>

                <div class="card-body">
                    <form action="" class="form">
                        <p>Order details</p>
                        <div class="form-group">
                            <select name="product_type_id" id="product_type_id" class="custom-select">
                                <option selected disabled>Order Status</option>
                                <option value="">For shipping</option>
                                <option value="">Out for delivery</option>
                                <option value="">Delivered</option>
                            </select>
                        </div>

                        <button class="btn btn-primary btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
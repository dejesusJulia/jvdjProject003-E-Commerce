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
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Product name">
                        </div>

                        <div class="form-group">
                            <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Description here"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="price" id="price" class="form-control" placeholder="price">
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="product_img" id="product_img" class="custom-file-input">
                                    <label for="product_img" class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="product_type_id" id="product_type_id" class="custom-select">
                                <option selected disabled>Product type</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                        </div>

                        <button class="btn btn-primary btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
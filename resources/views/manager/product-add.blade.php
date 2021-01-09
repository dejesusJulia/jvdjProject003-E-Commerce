@extends('layouts.manager')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <a href="{{route('manager.products')}}" class="btn btn-primary btn-sm m-2">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="https://images.unsplash.com/photo-1492107376256-4026437926cd?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=634&q=80" alt="#" id="preview" width="354px" height="467.12px">
                    </div>

                    <div class="col-md-6">  
                        <div class="card-body">
                            <h4 class="card-text text-center">Add new product</h4>
                            <form action="{{route('manager.productstore')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="product-name" placeholder="name of the product">
                                </div>
        
                                <div class="form-group">
                                    <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="type brief description here"></textarea>
                                </div>
        
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">&#8369;</span>
                                        </div>
                                        <input type="number" name="price" id="price" class="form-control" placeholder="price">
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="custom-file" id="product_file">
                                        <input type="file" name="product_img" id="product_img" class="custom-file-input">
                                        <label for="product_img" class="custom-file-label">Upload image</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select class="custom-select" name="product_type_id" id="product_type">
                                        <option selected disabled class="text-muted">Select product type</option>
                                        @foreach ($productTypes as $productType)
                                        <option value="{{$productType->id}}">{{$productType->type}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <input type="submit" value="Add" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="alert alert-info my-2">
                <p><strong>Tip:</strong> When uploading an image, it is best to choose a png image or something with a white background.</p>
            </div>
        </div>
    </div>
@endsection
@push('child-scripts')
    <script src="{{asset('js/custom.js')}}"></script>
@endpush
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
                        <img src="{{asset('/storage/images/'.$myarr[0]->product_img)}}" alt="#" id="preview" width="354px" height="467.12px">
                    </div>

                    <div class="col-md-6">  
                        <div class="card-body">
                            <h4 class="card-text text-center">Update product</h4>
                            <form action="{{route('manager.productupdate', $myarr[0]->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="product-name" placeholder="name of the product" value="{{$myarr[0]->name}}">
                                </div>
        
                                <div class="form-group">
                                    <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="type brief description here">{{$myarr[0]->description}}</textarea>
                                </div>
        
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">&#8369;</span>
                                        </div>
                                        <input type="number" name="price" id="price" class="form-control" placeholder="price" value="{{$myarr[0]->price}}">
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
                                        @foreach ($myarr[1] as $productType)
                                        <option value="{{$productType->id}}" {{$myarr[0]->product_type_id == $productType->id ? 'selected' : ''}}>{{$productType->type}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <input type="submit" value="Update" class="btn btn-block btn-primary">
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
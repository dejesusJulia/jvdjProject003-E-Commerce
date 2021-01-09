@extends('layouts.manager')

@section('content')
    <div class="container mx-auto my-2">
        <a href="{{route('manager.home')}}" class="btn btn-primary btn-sm m-2">
            <i class="fas fa-arrow-left"></i>
        </a>
        <x-alert/>
        <table class="table table-striped">
            <thead>
                <th class="text-center">id</th>
                <th class="text-center">name</th>
                <th class="text-center">type</th>
                <th class="text-center"></th>
            </thead>

            @forelse ($products as $product)
                <tr>
                    <td class="text-center">{{$product->id}}</td>
                    <td class="text-center">{{$product->name}}</td>
                    {{-- <td class="text-center">{{$product->product_type_id}}</td> --}}
                    <td class="text-center">{{$product->product_types['type']}}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{route('manager.productedit', $product->id)}}" class="mx-1">
                            <i class="fas fa-cog"></i>
                        </a>
                        <button class="mx-1 btn btn-danger" onclick="event.preventDefault(); if(confirm('Do you want to delete {{$product->name}}?')){
                            getElementById('product-del-{{$product->id}}').submit();
                        }">
                            <i class="fas fa-times"></i>
                        </button>

                        <form id="product-del-{{$product->id}}" action="{{route('manager.deleteproduct', $product->id)}}" method="post" style="display: none;">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center">N/A</td>
                    <td class="text-center">N/A</td>
                    <td class="text-center">N/A</td>
                    <td class="text-center"></td>
                </tr>
            @endforelse
        </table>

        <div class="d-flex justify-content-end">
            <a href="/manager/product-add" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i>
            </a>
        </div>
       
    </div>
@endsection
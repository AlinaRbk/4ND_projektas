@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>
    
                <div class="card-body">
                    <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                     @csrf

        <div class="row mb-3">
           <div class="col-md-6">
                <input id="product_title" type="text" class="form-control" name="product_title" value="{{$product->title}}"required autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <input id="product_title" type="text" class="form-control" name="product_title" value="{{$product->description}}"required autofocus>
            </div>
        </div>
        <div class="row mb-3">   
            <div class="col-md-6">
                <input id="product_title" type="text" class="form-control" name="product_title" value="{{$product->price}}"required autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <input id="product_title" type="text" class="form-control" name="product_title" value="{{$product->category_id}}"required autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <input id="product_title" type="text" class="form-control" name="product_title" value="{{$product->image_url}}"required autofocus>
            </div>
        </div>
        
            @csrf

            <button class="btn btn-primary" type='submit'>Edit</button>
            <a class="btn btn-secondary" href="{{route('product.index')}}">Back</a>
        </form>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
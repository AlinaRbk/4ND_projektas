@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product Category</div>
    
                <div class="card-body">
                    <form method="POST" action="{{route('productcategory.update',[$productcategory])}}" enctype="multipart/form-data">
                     @csrf

        <div class="row mb-3">
           <div class="col-md-6">
                <input id="productcategory_title" type="text" class="form-control" name="productcategory_title" value="{{$productcategory->title}}"required autofocus>
            </div>
        </div>
        <div class="row mb-3">
           <div class="col-md-6">
                <input id="productcategory_description" type="text" class="form-control" name="productcategory_description" value="{{$productcategory->description}}"required autofocus>
            </div>
        </div>



        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                Edit
                </button>
             </div>
        </div>
        
         

           
        </form>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
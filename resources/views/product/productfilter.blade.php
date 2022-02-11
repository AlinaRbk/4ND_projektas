@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table table-striped">
        <tr>
        <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category id</th>
            <th>Category name</th>
            <th>Action</th>
        </tr>
    
      
            @foreach ($products as $product)
            <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td><img src='{{$product->image_url}}' width="100" height="100"/></td>
            <td>{{$product->productcategory->id}}</td> 
            <td>{{$product->productcategory->title}}</td> 
            <td>
                <a class="btn btn-primary" href="{{route('product.edit', [$product])}}">Edit</a>
            
            </tr> 
            @endforeach
         
        </table>
    </div>
@endsection
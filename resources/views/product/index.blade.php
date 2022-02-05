@extends('layouts.app')

@section('content')

<div class="container">
<a class="btn btn-primary" href="{{route('product.create')}}">Create new Product</a>
<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
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
            <td><img src='{{$product->image_url}}' width="100" height="100"/></td>
            <td>{{$product->productCategory->id}}</td> 
            <td>{{$product->productCategory->title}}</td> 
                <td>
                    <a class="btn btn-primary" href="{{route('product.edit', [$product])}}">Edit</a>
                </td>   
        </tr> 
        @endforeach
     
    </table>
</div> 

@endsection
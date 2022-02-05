@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Category id</th>
        </tr>

        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td><img src='{{$product->image_url}}' width="100" height="100"/></td>
            <td>{{$product->productCategory->id}}</td> 
        </tr> 
        @endforeach
     
    </table>
</div> 

@endsection
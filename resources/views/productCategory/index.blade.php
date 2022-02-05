@extends('layouts.app')

@section('content')
<div class="container">
<a class="btn btn-primary" href="{{route('productcategory.create')}}">Create new Product Category</a>
<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        @foreach ($productcategories as $productcategory)
        <tr>
            <td>{{$productcategory->id}}</td>
            <td>{{$productcategory->title}}</td>
            <td>{{$productcategory->description}}</td>
            <td>
                    <a class="btn btn-primary" href="{{route('productcategory.edit', [$productcategory])}}">Edit</a>
                </td>   
        </tr> 
        @endforeach
     
    </table>
</div> 

@endsection
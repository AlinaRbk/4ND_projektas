@extends('layouts.app')

@section('content')

<div class="container">

<a class="btn btn-primary" href="{{route('product.create')}}">Create new Product</a>
<form method="GET" action="{{route('product.index')}}">
        @csrf
    <select name="sortCollumn">
    <!-- <option value="category_id">Category</option> -->
    @foreach ($select_array as $key=>$item)
    {{$key}}
                @if($item == $sortCollumn || ($key == 0 && empty($sortCollumn)) )
                    <option value="{{$item}}" selected>{{$item}}</option>
                @else 
                <option value="{{$item}}" >{{$item}}</option>
                @endif
                
            @endforeach

    </select>   
    <select name="sortOrder">
            @if ($sortOrder == 'asc' || empty($sortOrder))
                <option value="asc" selected>Ascending</option>
                <option value="desc">Descending</option>
            @else 
                <option value="asc">Ascending</option>
                <option value="desc" selected>Descending</option>
            @endif
        </select>    
        <button type="submit">Sort</button>
    </form>
    <div class="test">
        {{$sortCollumn}}
        {{$sortOrder}}
    </div>
</div>



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
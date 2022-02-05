@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
        </tr>

        @foreach ($productcategories as $productcategory)
        <tr>
            <td>{{$productcategory->id}}</td>
            <td>{{$productcategory->title}}</td>
            <td>{{$productcategory->description}}</td>
        </tr> 
        @endforeach
     
    </table>
</div> 

@endsection
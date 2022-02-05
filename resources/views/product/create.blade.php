@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create  Product</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="product_title" class="col-md-4 col-form-label text-md-end">Title</label>
    
                                <div class="col-md-6">
                                    <input id="product_title" type="text" class="form-control" name="product_title" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="product_description" class="col-md-4 col-form-label text-md-end">Description</label>
                                
    
                                <div class="col-md-6">
                                    <input id="product_description" type="text" class="form-control" name="product_description" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="product_price" class="col-md-4 col-form-label text-md-end">Price</label>
    
                                <div class="col-md-6">
                                    <input id="product_price" type="text" class="form-control" name="product_price" required autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="product_category_id" class="col-md-4 col-form-label text-md-end">Category ID</label>
                                <div class="col-md-6">
                                <div class="col-md-6">
                                    <input id="product_category_id" type="text" class="form-control" name="product_category_id" required autofocus>
                                </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="product_image_url" class="col-md-4 col-form-label text-md-end">Image URL</label>
    
                                <div class="col-md-6">
                                    <input id="product_image_url" type="text" class="form-control" name="product_image_url" required autofocus>
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                    
                                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
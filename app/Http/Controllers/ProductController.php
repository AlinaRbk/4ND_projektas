<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Productcategory;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // $products = Product::all()->sortBy('category_id', SORT_REGULAR,false );
        // return view('product.index', ['products' => $products]);
        $productcategories = Productcategory::orderBy('title', 'asc' )->get();
        $sortCollumn = $request->sortCollumn;
        $sortOrder = $request->sortOrder; 

        if(empty($sortCollumn) || empty($sortOrder)) {
            $products = Product::all();
        } else {
            if($sortCollumn == "productcategory_title") {
                $sortBool = true;
                
                if($sortOrder == "asc"){
                    $sortBool = false;
                }
        } else {
            $products = Product::orderBy($sortCollumn, $sortOrder )->get();
        }   
    }

        $select_array =  array_keys($products->first()->getAttributes());
        return view('product.index', ['products' => $products, 'productcategories'=>$productcategories,'sortCollumn' =>$sortCollumn, 'sortOrder'=> $sortOrder, 'select_array' => $select_array,  ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select_values = ProductCategory::all();
        return view('product.create', ['select_values' => $select_values]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->title = $request->product_title;
        $product->description = $request->product_description;
        $product->price = $request->product_price;
        $product->category_title = $request->product_category_title;
        $product->category_id = $request->product_category_id;
        $product->image_url = $request->product_image_url;



        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $select_values = Product::all();
        return view('product.edit', ['product' => $product, 'select_values' => $select_values]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->title = $request->product_title;
        $product->description = $request->product_description;
        $product->price = $request->product_price;
        $product->category_title = $request->product_category_title;
        $product->category_id = $request->product_category_id;
        $product->image_url = $request->product_image_url;


        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        return redirect()->route('product.index');
    }

    public function productfilter(Request $request) {

        $productcategory_title = $request->productcategory_title;
        $products = product::where('productcategory_title', '=' , $productcategory_title)->get();
        return view('product.productfilter', ['products' =>$products]);
    }
}

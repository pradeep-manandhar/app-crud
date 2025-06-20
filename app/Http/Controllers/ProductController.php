<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

use App\Models\Product; // Assuming you have a Product model

class ProductController extends Controller
{
    //

    public function index()
    {

      $products = Product::all(); // Retrieve all products from the database
        // Logic to retrieve and display products
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        // Logic to show the form for creating a new product
        return view('products.create');
    }

    public function store(Request $request){
      $data = $request->validate([
        'name'=>'required',
        'qty'=>'required|numeric',
        'price'=>'required|decimal:0,2',
        'description'=>'nullable',
       ]);

         // Logic to store the product in the database
         $newProduct = Product::create($data);

         return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {

      // dd($product);
        // Logic to show the form for editing a product
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        // Update the product in the database
        $product->update($data);

        // Redirect to the product index or show page
        return redirect(route('product.index'))->with('success', 'Product updated successfully!');
    }

}

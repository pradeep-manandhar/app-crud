<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        // Logic to retrieve and display products
        return view('products.index');
    }

    public function create()
    {
        // Logic to show the form for creating a new product
        return view('products.create');
    }

    public function store(Request $request){
        dd($request);
    }

}

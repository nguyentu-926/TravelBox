<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function show($id){
        $products = Product::findOrrFail($id);
        return view('products.show', compact('product'));
    }
}

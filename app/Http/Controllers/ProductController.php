<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        /*
         * 1. data ophalen uit database
         * 2. view returnen
         */


        $products = Product::all();



        // 2
        return view('products/index')
            ->with('products', $products);
    }
}

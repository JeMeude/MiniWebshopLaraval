<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        /*
         * 1. data ophalen uit database
         * 2. view returnen
         */


        $categories = Category::all();



//         2
        return view('categories/index')
            ->with('categories', $categories);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productIndex(){
      
        return view ('products.productIndex');
    }
}

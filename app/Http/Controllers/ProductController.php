<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productIndex(){
      
        return view ('products.productIndex');
    }
    public function create( ){
        return view('products.ProductCreate');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);
     
    }

  

    public function edit($id){}

    public function update(){}

    public function destroy($id){}
}

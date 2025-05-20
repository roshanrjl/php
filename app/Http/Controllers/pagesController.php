<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{ 
    public function welcome(){
        $name = 'rohan rijal';
        return view('welcome',compact('name'));
    }
    public function about(){
        return view('about');
    }
}

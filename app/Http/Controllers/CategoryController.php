<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
    //  $categories = Category::all();
    $categories = Category::orderBy('order', 'asc')->get();
    //data order ko basic  ma show hunxa asc vanako ascending order
    //  $categories =Category::orderBy('order','desc')->get();//data order ko basic  ma show hunxa decs vanako descending order kai pani nwlakha asc ma aauxa
    return view('categories.index', compact('categories'));
  }
  public function create()
  {

    return view('categories.create');
  }
  public function store(Request $request)
  {
    $data = $request->validate([
      'order' => 'required|numeric',
      'name' => 'required',
    ]);
    Category::create($data);
    return redirect()->route('categories.index');
  }
}

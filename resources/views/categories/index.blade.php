@extends('layouts.app')
@section('title',"categories")
@section('content')




<div class="p-6 bg-gray-50 min-h-screen">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Category Products</h1>
        <a href="{{route('categories.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            + Add New
        </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full text-left border border-gray-200">
            <thead class="bg-gray-100 text-gray-700 text-sm font-medium">
                <tr>
                    <th class="px-6 py-3 border-b">order</th>
                    <th class="px-6 py-3 border-b">Category Name</th>

                    <th class="px-6 py-3 border-b text-right">Action</th>
                </tr>
            </thead>
            @foreach($categories as $catagory)
            <tbody class="text-gray-700 text-sm">
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-3 border-b">{{$catagory->order}}</td>
                    <td class="px-6 py-3 border-b">{{$catagory->name}}</td>

                    <td class="px-6 py-3 border-b text-right space-x-2">
                        <a href="{{route('categories.edit',$catagory->id)}}" class="text-blue-500 hover:underline">Edit</a>
                        <a
                        onclick="return confirm('are you sure to delete');"
                        href="{{route('categories.destroy',$catagory->id)}}" class="text-blue-500 hover:underline">Delete</a>
                
                    </td>
                </tr>

            </tbody>
            @endforeach
        </table>
    </div>
</div>



@endsection
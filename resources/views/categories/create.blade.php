@extends('layouts.app')
@section('title', 'Create Category')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6">Add New Category</h2>
    <form action="{{ route('categories.store') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Order Field -->
        <div>
            <label for="order" class="block text-sm font-medium text-gray-700">Order</label>
            <input type="text" name="order" id="order" 
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('order') }}">
            @error('order')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Category Name Field -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
            <input type="text" name="name" id="name" 
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('name') }}">
            @error('name')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit and Cancel -->
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Add Category
            </button>
            <a href="{{ route('categories.index') }}" class="text-blue-500 hover:underline">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection

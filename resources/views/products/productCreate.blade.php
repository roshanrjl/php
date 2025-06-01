@extends('layouts.app')
@section('title', 'Create Product')
@section('content')
   
<body class="bg-gray-100 text-gray-800 font-sans">

  <div class="max-w-3xl mx-auto p-6 mt-10 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-6">Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
      <!-- Product Name -->
      <div>
        <label class="block text-sm font-medium mb-1">Product Name</label>
        <input type="text" name="name" required
               class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Price -->
      <div>
        <label class="block text-sm font-medium mb-1">Price ($)</label>
        <input type="number" name="price" step="0.01" required
               class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Description -->
      <div>
        <label class="block text-sm font-medium mb-1">Description</label>
        <textarea name="description" rows="3" required
                  class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
      </div>

      <!-- Category -->
      <div>
        <label class="block text-sm font-medium mb-1">Category</label>
        <select name="category" required
                class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">Select category</option>
          <option value="electronics">Electronics</option>
          <option value="clothing">Clothing</option>
          <option value="books">Books</option>
          <option value="accessories">Accessories</option>
        </select>
      </div>

      <!-- Stock -->
      <div>
        <label class="block text-sm font-medium mb-1">Stock Quantity</label>
        <input type="number" name="stock" required
               class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Status -->
      <div>
        <label class="block text-sm font-medium mb-1">Status</label>
        <select name="status" required
                class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
      </div>

      <!-- Image Upload -->
      <div>
        <label class="block text-sm font-medium mb-1">Product Image</label>
        <input type="file" name="image" accept="image/*" required
               class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
      </div>

      <!-- Action Buttons -->
      <div class="flex justify-end space-x-4 pt-4">
        <a href="{{ route('products.index') }}"
           class="px-6 py-2 border border-gray-300 rounded text-gray-700 hover:bg-gray-100 transition">
          Cancel
        </a>
        <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
          Add Product
        </button>
      </div>
    </form>
  </div>

</body>


@endsection
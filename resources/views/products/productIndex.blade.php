@extends('layouts.app')
@section('title', 'Products')
@section('content')

<body class="bg-gray-100 text-gray-800 font-sans">
  <div class="p-6 max-w-7xl mx-auto">

    <!-- Header and Add Product Button -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold">Products</h1>
      <button 
        onclick="window.location.href='{{ route("products.create") }}'"
        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2 rounded-lg transition"
      >
        + Add Product
      </button>
    </div>

    <!-- Products Table -->
    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Image</th>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Name</th>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Price</th>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Description</th>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Category</th>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Stock</th>
            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
            <th class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase">Actions</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-100">
          <!-- Example Product Row -->
          <tr>
            <td class="px-6 py-4">
              <img src="https://via.placeholder.com/60" alt="Product Image" class="w-14 h-14 object-cover rounded-md" />
            </td>
            <td class="px-6 py-4">Wireless Mouse</td>
            <td class="px-6 py-4">$25.99</td>
            <td class="px-6 py-4">Ergonomic wireless mouse with USB receiver</td>
            <td class="px-6 py-4">Electronics</td>
            <td class="px-6 py-4">120</td>
            <td class="px-6 py-4">
              <span class="inline-flex px-2 text-xs font-medium leading-5 rounded-full bg-green-100 text-green-800">
                Active
              </span>
            </td>
            <td class="px-6 py-4 text-right">
              <button class="text-blue-600 hover:underline mr-2">Edit</button>
              <button class="text-red-600 hover:underline">Delete</button>
            </td>
          </tr>

          <!-- Add more rows dynamically here -->
        </tbody>
      </table>
    </div>

  </div>
</body>

@endsection

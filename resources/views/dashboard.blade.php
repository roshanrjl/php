@extends ('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
    <!-- Total Users Card -->
    <div class="bg-red-200 rounded-xl shadow-md flex items-center space-x-4 p-6">
        <div class="flex-shrink-0">
            <i class="ri-user-line text-3xl text-blue-500"></i>
        </div>
        <div>
            <h3 class="text-xl font-medium text-gray-900">Total Users</h3>
            <p class="text-gray-600 text-lg font-semibold">55</p>
        </div>
    </div>

    <!-- Total Orders Card -->
    <div class="bg-red-200 rounded-xl shadow-md flex items-center space-x-4 p-6">
        <div class="flex-shrink-0">
            <i class="ri-shopping-cart-line text-3xl text-green-500"></i>
        </div>
        <div>
            <h3 class="text-xl font-medium text-gray-900">Total Orders</h3>
            <p class="text-gray-600 text-lg font-semibold">7711</p>
        </div>
    </div>

    <!-- Revenue Card -->
    <div class="bg-red-200 rounded-xl shadow-md flex items-center space-x-4 p-6">
        <div class="flex-shrink-0">
            <i class="ri-money-rupee-circle-line text-3xl text-yellow-500"></i>
        </div>
        <div>
            <h3 class="text-xl font-medium text-gray-900">Revenue</h3>
            <p class="text-gray-600 text-lg font-semibold">₹785675757</p>
        </div>
    </div>

    <!-- New Customers Card -->
    <div class="bg-blue-200 rounded-xl shadow-md flex items-center space-x-4 p-6">
        <div class="flex-shrink-0">
            <i class="ri-user-add-line text-3xl text-purple-500"></i>
        </div>
        <div>
            <h3 class="text-xl font-medium text-gray-900">Total Categories</h3>
            <p class="text-gray-600 text-lg font-semibold">12</p>
        </div>
    </div>

    <!-- Pending Orders Card -->
    <div class="bg-blue-200 rounded-xl shadow-md flex items-center space-x-4 p-6">
        <div class="flex-shrink-0">
            <i class="ri-time-line text-3xl text-red-500"></i>
        </div>
        <div>
            <h3 class="text-xl font-medium text-gray-900">Total Products</h3>
            <p class="text-gray-600 text-lg font-semibold">8</p>
        </div>
    </div>

    <!-- Support Tickets Card -->
    <div class="bg-blue-200 rounded-xl shadow-md flex items-center space-x-4 p-6">
        <div class="flex-shrink-0">
            <i class="ri-customer-service-2-line text-3xl text-indigo-500"></i>
        </div>
        <div>
            <h3 class="text-xl font-medium text-gray-900">Pending Orders</h3>
            <p class="text-gray-600 text-lg font-semibold">4</p>
        </div>
    </div>
</div>
@endsection
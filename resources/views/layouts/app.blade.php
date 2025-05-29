<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>

<body class="font-sans antialiased">
    @include('layouts.alert')
    <div class="flex">
        <!-- Sidebar -->
        <div class="h-screen w-52 bg-blue-200 shadow-md flex-shrink-0">
            <h1 class="text-center font-bold text-xl my-5">Logo</h1>
            <nav class="flex flex-col gap-2 px-4">
                <a href="/dashboard" class="bg-blue-300 hover:bg-blue-600 hover:text-white text-black p-2 rounded-md transition-colors duration-200">Dashboard</a>
                <a href="{{route('categories.index')}}" class="bg-blue-300 hover:bg-blue-600 hover:text-white text-black p-2 rounded-md transition-colors duration-200">Categories</a>
                <a href="/product" class="bg-blue-300 hover:bg-blue-600 hover:text-white text-black p-2 rounded-md transition-colors duration-200">Product</a>
                <a href="/order" class="bg-blue-300 hover:bg-blue-600 hover:text-white text-black p-2 rounded-md transition-colors duration-200">Orders</a>
                <a href="/logout" class="bg-blue-300 hover:bg-blue-600 hover:text-white text-black p-2 rounded-md transition-colors duration-200">Logout</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h2 class="text-2xl font-semibold mb-4">@yield('title')</h2>
            <div class="bg-white p-4 rounded shadow">
               <div>@yield('content')</div>
            </div>
        </div>
    </div>
</body>


</html>
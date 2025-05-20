<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white px-4 py-3">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Laravel Project</h1>
            <div class="space-x-4">
                <a href="/" class="hover:text-gray-300">Home</a>
                <a href="about" class="hover:text-gray-300">About</a>
                <a href="contact" class="hover:text-gray-300">Contact</a>
                
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-10">
        <div class="container mx-auto text-center">
            &copy; 2025 Laravel Project. All rights reserved.
        </div>
    </footer>

</body>
</html>

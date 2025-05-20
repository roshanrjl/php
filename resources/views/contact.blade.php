@extends('layouts.master')
@section('content')
   <body class="bg-gray-100 text-gray-800">

    <!-- Contact Form -->
    <section class="container mx-auto my-12 p-6 bg-white shadow-md rounded-lg max-w-2xl">
        <h2 class="text-3xl font-bold mb-6 text-center text-gray-700">Contact Us</h2>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" rows="5" required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-gray-800 text-white py-2 px-4 rounded-md hover:bg-gray-700 transition">Send Message</button>
        </form>
    </section>

</body>
@endsection





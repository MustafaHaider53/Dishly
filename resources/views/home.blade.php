@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
        <div class="container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center bg-white bg-opacity-75 p-8 rounded-lg shadow-lg">
                <h1 class="text-5xl font-bold text-gray-800 mb-4 animate-fade-in">Welcome to Dishly</h1>
                <p class="text-xl text-gray-600 mb-8 animate-fade-in">Order your favorite meals online and enjoy delicious food delivered to your doorstep!</p>
                <a href="/menu" class="bg-orange-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-orange-600 transition duration-300 animate-bounce">Explore Our Menu</a>
            </div>
        </div>
    </section>

    <!-- Featured Menu Section -->
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Featured Dishes</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Dish 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Dish 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Grilled Salmon</h3>
                    <p class="text-gray-600 mb-4">Freshly grilled salmon served with a side of vegetables.</p>
                    <p class="text-orange-500 font-bold">$15.99</p>
                </div>
            </div>

            <!-- Dish 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Dish 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Spaghetti Carbonara</h3>
                    <p class="text-gray-600 mb-4">Classic Italian pasta with creamy sauce and bacon.</p>
                    <p class="text-orange-500 font-bold">$12.99</p>
                </div>
            </div>

            <!-- Dish 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1567620832903-9fc6debc209f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Dish 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Beef Burger</h3>
                    <p class="text-gray-600 mb-4">Juicy beef burger with cheese, lettuce, and tomato.</p>
                    <p class="text-orange-500 font-bold">$10.99</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-orange-500 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Order?</h2>
            <p class="text-xl text-white mb-8">Join thousands of happy customers and enjoy the best food in town!</p>
            <a href="/menu" class="bg-white text-orange-500 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Order Now</a>
        </div>
    </section>
@endsection
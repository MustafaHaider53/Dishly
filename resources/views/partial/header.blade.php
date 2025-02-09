<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center w-full">
        <!-- Logo -->
        <a href="/" class="text-2xl font-bold text-gray-800 whitespace-nowrap">Dishly</a>

        <!-- Navigation Links -->
        <nav class="flex items-center space-x-4 whitespace-nowrap">
            <a href="/" class="text-gray-700 hover:text-gray-900">Home</a>
            <a href="/menu" class="text-gray-700 hover:text-gray-900">Menu</a>
            <a href="{{ route('cart.index') }}" class="flex items-center text-gray-700 hover:text-gray-900">
                Cart
                <span class="ml-1 bg-orange-500 text-white px-2 py-1 rounded-full text-xs">
                    {{ array_sum(array_column(session('cart', []), 'quantity')) }}
                </span>
            </a>
            @auth
                <a href="{{ route('profile.edit') }}" class="text-gray-700 hover:text-gray-900">Profile</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-gray-700 hover:text-gray-900">Logout</a>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">Login</a>
                <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900">Register</a>
            @endauth
        </nav>
    </div>
</header>

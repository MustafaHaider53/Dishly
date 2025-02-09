<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="text-2xl font-bold text-gray-800">Dishly</a>

        <!-- Navigation Links -->
        <nav class="space-x-4">
            <a href="/" class="text-gray-700 hover:text-gray-900">Home</a>
            <a href="/menu" class="text-gray-700 hover:text-gray-900">Menu</a>
            <a href="/cart" class="text-gray-700 hover:text-gray-900">Cart</a>
            @auth
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-gray-700 hover:text-gray-900">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">Login</a>
                <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900">Register</a>
            @endauth
        </nav>
    </div>
</header>
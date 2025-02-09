<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dishly Admin</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4">
                <h2 class="text-xl font-bold text-gray-800">Dishly Admin</h2>
            </div>
            <nav class="mt-4">
                <a href="{{ route('admin.products.index') }}" class="block p-4 text-gray-700 hover:bg-gray-100">Products</a>
                <a href="{{ route('admin.orders.index') }}" class="block p-4 text-gray-700 hover:bg-gray-100">Orders</a>
                <a href="{{ route('admin.customers.index') }}" class="block p-4 text-gray-700 hover:bg-gray-100">Customers</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-auto">
            @yield('content')
        </main>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dishly - Online Restaurant</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-fade-in {
            animation: fadeIn 1.5s ease-out;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-20px); }
            60% { transform: translateY(-10px); }
        }
        .animate-bounce {
            animation: bounce 2s infinite;
        }
    </style>
</head>
<body class="bg-gray-100">
    @include('partial.header')
    <main>
        @yield('content')
    </main>
    @include('partial.footer')
</body>
</html>
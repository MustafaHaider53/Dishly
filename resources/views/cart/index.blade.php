@extends('layouts.master')

@section('content')
<section class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold mb-8">Your Cart</h2>
    @if (count($cart) > 0)
        <div class="bg-white rounded-lg shadow-lg p-6">
            @foreach ($cart as $id => $item)
                <div class="flex items-center justify-between border-b pb-4 mb-4">
                    <div class="flex items-center space-x-4">
                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-20 h-20 object-cover rounded">
                        <div>
                            <h3 class="text-lg font-semibold">{{ $item['name'] }}</h3>
                            <p class="text-gray-600">${{ $item['price'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <form action="{{ route('cart.update', $id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input 
                                type="number" 
                                name="quantity" 
                                value="{{ $item['quantity'] }}" 
                                min="1" 
                                class="w-16 px-2 py-1 border rounded"
                            >
                        </form>
                        <form action="{{ route('cart.destroy', $id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="text-right mt-6">
                <p class="text-2xl font-bold">
                    Total: ${{ array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)) }}
                </p>
                <a href="{{ route('checkout') }}" class="bg-orange-500 text-white px-6 py-3 mt-4 inline-block rounded hover:bg-orange-600">
                    Proceed to Checkout
                </a>
            </div>
        </div>
    @else
        <p class="text-center text-gray-600">Your cart is empty.</p>
    @endif
</section>
@endsection
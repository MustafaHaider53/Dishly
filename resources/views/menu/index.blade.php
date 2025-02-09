@extends('layouts.master')

@section('content')
<section class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Our Menu</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ($products as $product)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-orange-500 font-bold">${{ $product->price }}</span>
                        <button 
                            class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 add-to-cart"
                            data-product-id="{{ $product->id }}"
                            >
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<script>
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', async (e) => {
            e.preventDefault();
            const productId = button.dataset.productId;

            // Send POST request to add item to cart
            await fetch('{{ route("cart.store") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ product_id: productId })
            });

            // Reload to update cart counter
            window.location.reload();
        });
    });
</script>
@endsection
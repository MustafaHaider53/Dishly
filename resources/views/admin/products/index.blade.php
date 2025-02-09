@extends('admin.layouts.admin')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manage Products</h2>
        <a href="{{ route('admin.products.create') }}" class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
            Add New Product
        </a>
    </div>
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left py-2">Name</th>
                <th class="text-left py-2">Price</th>
                <th class="text-left py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr class="border-b">
                    <td class="py-4">{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td class="flex space-x-2">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('admin.layouts.admin')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-6">Manage Orders</h2>
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left py-2">Order ID</th>
                <th class="text-left py-2">Customer</th>
                <th class="text-left py-2">Total</th>
                <th class="text-left py-2">Status</th>
                <th class="text-left py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr class="border-b">
                    <td class="py-4">#{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>${{ $order->total }}</td>
                    <td>
                        <span class="px-2 py-1 bg-gray-200 rounded">{{ $order->status }}</span>
                    </td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
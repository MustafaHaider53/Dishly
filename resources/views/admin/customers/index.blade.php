@extends('admin.layouts.admin')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-6">Manage Customers</h2>
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left py-2">Name</th>
                <th class="text-left py-2">Email</th>
                <th class="text-left py-2">Orders</th>
                <th class="text-left py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr class="border-b">
                    <td class="py-4">{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->orders->count() }}</td>
                    <td>
                        <a href="{{ route('admin.customers.show', $customer->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
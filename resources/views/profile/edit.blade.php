@extends('layouts.master')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Profile</h2>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PATCH')

            <!-- Name -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Name</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500">
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500">
            </div>

            <!-- Address -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Address</label>
                <textarea name="address" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-orange-500">{{ old('address', $user->address) }}</textarea>
            </div>

            <button type="submit" class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-300">Save Changes</button>
        </form>
    </div>
</div>
@endsection
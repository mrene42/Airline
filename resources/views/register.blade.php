@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 text-center">Register</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST" class="mt-6">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" required class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" required class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" required class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Register</button>
        </form>

        <p class="text-center mt-4 text-sm text-gray-600">
            Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login here</a>
        </p>
    </div>
@endsection

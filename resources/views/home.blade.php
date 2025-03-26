@extends('layouts.app')
@section('content')
    <div class="flex flex-col items-center justify-center h-screen text-center px-6">
        
        <h1 class="text-5xl sm:text-7xl font-extrabold text-gray-900 animate-fade-in">
            Welcome to <span class="text-indigo-600">Airline</span>
        </h1>
        
        <p class="mt-6 text-lg sm:text-xl text-gray-600 max-w-2xl animate-fade-in delay-200">
            Discover the best flights at the best price. Explore new destinations in comfort and safety.
        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4 animate-fade-in delay-400">
            <a href="{{ route('flightHome') }}" 
            class="rounded-md bg-indigo-600 px-5 py-3 text-lg font-semibold text-white shadow-lg transition duration-300 transform hover:scale-105 hover:bg-indigo-500">
            Explore Flights
            </a>
            <a href="#" 
            class="text-lg font-semibold text-gray-900 hover:text-indigo-600 transition">
            More information →
            </a>
        </div>

    </div>


    <style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
    .animate-fade-in.delay-200 { animation-delay: 0.2s; }
    .animate-fade-in.delay-400 { animation-delay: 0.4s; }
    </style>
@endsection

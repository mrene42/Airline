@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">List of flights</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($flights as $flight)
            <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                <div class="h-48 bg-cover bg-center" style="background-image: url('/img/card-left.jpg');">
                </div>

                <div class="p-5">
                    <p class="text-sm text-gray-500">Flight: <span class="font-semibold">{{ $flight->id }}</span></p>
                    
                    <h2 class="text-lg font-bold text-gray-900 mt-2">
                        {{ $flight->departure }} → {{ $flight->arrival }}
                    </h2>

                    <p class="text-gray-700 text-sm mt-2">Date: <span class="font-medium">{{ $flight->date }}</span></p>
                    <p class="text-gray-700 text-sm">Available: <span class="font-medium">{{ $flight->available }}</span></p>
                    
                    <div class="flex items-center mt-4">
                        <img class="w-10 h-10 rounded-full mr-3" src="https://cdn.pixabay.com/photo/2021/11/30/00/42/airplane-icon-6834138_1280.png" alt="Airplane">
                        <div>
                            <p class="text-gray-900 text-sm font-semibold">Plane #{{ $flight->plane_id }}</p>
                            <p class="text-gray-600 text-xs">Reservation</p>
                        </div>
                    </div>

                    <a href="{{ route('flightShow', $flight->id) }}" 
                       class="block text-center bg-blue-500 text-white py-2 mt-4 rounded hover:bg-blue-600 transition">
                       More Info
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto my-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">List of Planes</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($planes as $plane)
            <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden">
                <div class="h-48 bg-cover bg-center" style="background-image: url({{ $plane->imgplane }});"></div>
                
                <div class="p-4">
                    <p class="text-sm text-gray-500">ID: <span class="font-semibold">{{ $plane->id }}</span></p>
                    
                    <h2 class="text-lg font-bold text-gray-900 mt-2">
                        {{ $plane->name }}
                    </h2>

                    <p class="text-gray-700 text-sm mt-2">Seats: <span class="font-medium">{{ $plane->seats }}</span></p>
                    
                    <div class="mt-4 flex justify-between">

                        <a href="{{ route('planeUpdate', $plane->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-all duration-300 ease-in-out transform hover:scale-105">
                            Edit
                        </a>
                        
                        <form action="{{ route('planeDelete', $plane->id) }}" method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition-all duration-300 ease-in-out transform hover:scale-105">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-6 flex justify-end">
        <a href="{{ route('planeStore') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition-all duration-300 ease-in-out transform hover:scale-105">
            Create New Plane
        </a>
    </div>
</div>
@endsection

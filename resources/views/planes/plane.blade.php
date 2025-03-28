@extends('layouts.app')
@section('content')
<div class="container mx-auto my-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">List of planes</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($planes as $plane)
            <div class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                <div class="h-48 bg-cover bg-center" style="background-image: url({{ $plane->imgplane }});">
                </div>

                <div class="p-5">
                    <p class="text-sm text-gray-500">ID: <span class="font-semibold">{{ $plane->id }}</span></p>
                    
                    <h2 class="text-lg font-bold text-gray-900 mt-2">
                        {{ $plane->name}}
                    </h2>

                    <p class="text-gray-700 text-sm mt-2">Seats: <span class="font-medium">{{ $plane->seats}}</span></p>                    
                    
                    <div class="flex items-center mt-4"> 
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                         Edit
                        </button>
                    </div>
                </div>
                
            </div>
        @endforeach
    </div>

</div>
@endsection

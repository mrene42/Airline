@extends('layouts.app')
@section('content')
    <div class=" mx-auto  px-4 bg-gradient-to-b  py-8">
        <div class="overflow-hidden rounded-lg shadow-lg text-white">
            <table class="min-w-full table-christmas-gradient table-auto border-collapse text-sm">
                <thead>
                    <tr class="bg-red-700">
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            ID</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Name</th>
                        <th
                            class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider flex justify-center">
                            Seats</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Imagen</th>
                    </tr>
                </thead>
                <tbody class="bg-red-50">
                        
                    @foreach ( $planes as $plane )
                        <tr
                            class="bg-red-100 hover:bg-red-300 transition ease-in-out duration-200 transform hover:scale-100">
                            <td class="font-serif text-md leading-tight border-dashed text-black border-red-300 px-6 py-4">
                                {{ $plane->id }}</td>
                            <td class="font-serif text-md leading-tight border-dashed text-black border-red-300 px-6 py-4">
                                {{ $plane->name }}</td>
                            <td class="border-dashed text-black border-red-300 px-6 py-4">{{ $plane->seats }}</td>
                            <td class="border-dashed text-black border-red-300 px-6 py-4">{{ $plane->imgplane }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

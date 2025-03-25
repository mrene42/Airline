@extends('layouts.app')
@section('content')
    <div class=" mx-auto  px-4 bg-gradient-to-b  py-8">
        <div class="overflow-hidden rounded-lg shadow-lg text-white">
            <table class="min-w-full table-christmas-gradient table-auto border-collapse text-sm">
                <thead>
                    <tr class="bg-red-700">
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Date</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            departure</th>
                        <th
                            class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider flex justify-center">
                            Arrival</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Plane_id</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Available</th>
                    </tr>
                </thead>
                <tbody class="bg-red-50">
                        
                    @foreach ( $flights as $flight )
                        <tr
                            class="bg-red-100 hover:bg-red-300 transition ease-in-out duration-200 transform hover:scale-100">
                            <td class="font-serif text-md leading-tight border-dashed text-black border-red-300 px-6 py-4">
                                {{ $flight->Date }}</td>
                            <td class="font-serif text-md leading-tight border-dashed text-black border-red-300 px-6 py-4">
                                {{ $flight->departure }}</td>
                            <td class="border-dashed text-black border-red-300 px-6 py-4">{{ $flight->arrival }}</td>
                            <td class="border-dashed text-black border-red-300 px-6 py-4">{{ $flight->plane_id }}</td>
                            <td class="border-dashed text-black border-red-300 px-6 py-4">{{ $flight->available }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

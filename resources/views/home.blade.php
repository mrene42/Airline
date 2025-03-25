@extends('layouts.app')
@section('content')
    <h1>Welcome to Airline</h1>
    <p>Book your next flight with us!</p>
    <p>Click <a href="{{ route('flightHome') }}">here</a> to view our flights.</p>
    <button>
        <a href="{{ route('planeHome') }}">Plane</a>
    </button>

@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flights = Flight::all();
        return view('flights.flight', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->IsAdmin=true) {
            
            return view('flight');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flight = Flight::create([ 
            'date' => $request->date,
            'departure' => $request->departure,
            'arrival' => $request->arrival,
            'plane_id' => $request->plane_id,
            'available' => $request->available,
        ]);

        $flight->save();

        return redirect()->route('flightStore');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $flight = flight::findOrFail($id);
        $booked = count($flight->users()->where('user_id', Auth::id())->get());

        if ($request->action === 'book' && !$booked)
        {
            $this->book($flight, Auth::id());
            return (Redirect::to(route('flight.show', $flight->id)));

        }
        if ($request->action === 'debook' && $booked)
        {
            $this->debook($flight, Auth::id());
            return (Redirect::to(route('flight.show', $flight->id)));
        }
        return view('flight.show', compact('flight', 'booked'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flight $id)
    {
        if(Auth::user()->isAdmin=true) {

            $flight = flight::find($id);
            return view('flight.edit', compact('flight'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flight $id)
    {
        $flight = flight::find($id);
        $flight->update([
            'date' => $request->date,
            'departure' => $request->departure,
            'arrival' => $request->arrival,
            'plane_id' => $request->plane_id,
            'available' => $request->available,
        ]);

        $flight->save();

        return redirect()->route('flightUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $id)
    {
        if(Auth::user()->isAdmin=true) {

        $flight = flight::find($id);

        $flight->delete();

        return redirect()->route('flightDelete');
        }
    }

    public function book($flight, $userId)
    {
        $flight->users()->attach($userId);
    }

    public function debook($flight, $userId)
    {
        $flight->users()->detach($userId);
    }
}

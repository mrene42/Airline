<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planes = Plane::all();
        return view('planes.index', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->isAdmin=true)
        {
            return view('planes.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plane = Plane::create([
            'name' => $request->name,
            'seats' => $request->seats,
            'imgplane' => $request->imgplane,
        ]);

        $plane->save();

        return redirect()->route('planeStore');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plane $id)
    {
        $plane = Plane::findOrFail($id);
        return view('planes.show', compact('plane'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plane $id)
    {
        if(Auth::user()->isAdmin=true)
        {
            $plane = Plane::findOrFail($id);
            return view('planes.edit', compact('plane'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plane $id)
    {
        $plane = Plane::findOrFail($id);
        $plane->update([
            'name' => $request->name,
            'seats' => $request->seats,
            'imgplane' => $request->imgplane,
        ]);

        $plane->save();

        return redirect()->route('planeUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plane $id)
    {
        if(Auth::user()->isAdmin=true)
        {
            $plane = Plane::findOrFail($id);
            $plane->delete();

            return redirect()->route('planeDelete');
        }
        
    }
}

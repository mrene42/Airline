<?php

namespace App\Http\Controllers\Api;

use App\Models\Plane;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planes = Plane::all();

        return response()->json($planes, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $planes = Plane::create([
            'name' => $request->name,
            'seats' => $request->seats,
            'imgplane' => $request->imgplane,
        ]);

        $planes->save();

        return response()->json($planes, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $planes = Plane::findOrFail($id);

        return response()->json($planes, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $planes = Plane::findOrFail($id);

        $planes->update([
            'name' => $request->name,
            'seats' => $request->seats,
            'imgplane' => $request->imgplane,
        ]);

        $planes->save();

        return response()->json($planes, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $planes = Plane::findOrFail($id);

        $planes->delete();
    }
}

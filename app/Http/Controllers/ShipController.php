<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ship::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Ship::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Ship $ship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $ship = Ship::find($id);
        $ship->update($request->all());

        return $ship;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Ship::destroy($id);
    }
}

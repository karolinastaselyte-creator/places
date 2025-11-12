<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Place;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $country = Country::findOrFail($id);

        $placesByCategory = Place::with('categories')
            ->where('country_id', $id)
            ->get()
            ->groupBy('categories.name');

        return view('country/show', compact('country', 'placesByCategory'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

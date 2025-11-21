<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places_byCountry = auth()->user()->place()->with('country')->get()->groupBy('country.name');
        

        $places_byContinent = $places_byCountry->mapToGroups(function ($places, $countryName) {

            $continentName = $places->first()->country->continent->name;

            return [

                $continentName => $countryName
            ];
        });
        //dd($places_byContinent->toArray());

        return view('bookmark/index', compact('places_byCountry', 'places_byContinent'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        auth()->user()->place()->toggle($id);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

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
        //dd($places_byCountry->toArray());

        return view('bookmark/index', compact('places_byCountry'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

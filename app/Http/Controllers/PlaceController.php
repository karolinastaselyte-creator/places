<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        //
    }

    public function show(string $id)
    {
        $place = Place::findOrFail($id);

        //dd($continent->toArray());
        //dd($continent->countries->toArray());

        return view('place/show', compact('place'));                    
    }
}

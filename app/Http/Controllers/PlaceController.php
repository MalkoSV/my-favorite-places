<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceRequest;
use App\Http\Requests\PlaceSelectRequest;
use App\Models\Picture;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{

    public function index()
    {
        $places = Place::all();
        return view('places', compact('places'));
    }

    public function sendForm(PlaceRequest $request)
    {
        Place::create($request->all());
        return redirect('/places');
    }

    public function show($id)
    {
        $place = Place::find($id);
        $pictures = Picture::where('place_id', $id)->orderby('created_at', 'desc')->get();
     //   dd($pictures);
        return view('showPlace', compact('place', 'pictures'));
    }

    public function getPlaces()
    {
        $places = Place::all();
        return view('placesSelect', compact('places'));
    }

    public function sendPlace(PlaceSelectRequest $request)
    {
        $link = '/places/'.$request->id.'/photos/add';
        return redirect($link);
    }

}

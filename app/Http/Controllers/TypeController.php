<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index(Request $request)
    {
        $types = Type::all();
        return view('types', compact('types'));
    }

    public function getTypes(Request $request)
    {
        $types = Type::all();
        return view('placesCreate', compact('types'));
    }

    public function sendForm(TypeRequest $request)
    {
        Type::create($request->all());
        return redirect('/types');
    }

}

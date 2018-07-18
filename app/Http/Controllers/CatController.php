<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    public function showAllCats()
    {
        return response()->json(Cat::all());
    }

    public function showOneCat($id)
    {
        return response()->json(Cat::Find($id));
    }
    
    public function create(Request $request)
    {
        $cat = Cat::create($request->all());

        return response()->json($cat, 201);
    }

    public function update($id, Request $request)
    {
        $cat = Cat::findOrFail($id);
        
        $cat::update($request->all());

        return response()->json($cat, 200);
    }

    public function delete()
    {
        $cat = Cat::findOrFail($id)->delete();

        return response()->json('Deleted Successfully', 200);
    }
}

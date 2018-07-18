<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    public function showAllDogs()
    {
        return response()->json(Dog::all());
    }

    public function showOneDog($id)
    {
        return response()->json(Dog::Find($id));
    }
    
    public function create(Request $request)
    {
        $dog = Dog::create($request->all());

        return response()->json($dog, 201);
    }

    public function update($id, Request $request)
    {
        $dog = Dog::findOrFail($id);
        
        $dog::update($request->all());

        return response()->json($dog, 200);
    }

    public function delete()
    {
        $dog = Dog::findOrFail($id)->delete();

        return response()->json('Deleted Successfully', 200);
    }
}

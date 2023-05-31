<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Cat;
use Illuminate\Http\Request;

class CarController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        $cats = Cat::all();

        return view('back.cars.create', [
            'cats' => $cats
        ]);
    }


    public function store(Request $request)
    {
        //
    }

    
    public function show(Car $car)
    {
        //
    }

    
    public function edit(Car $car)
    {
        //
    }

    
    public function update(Request $request, Car $car)
    {
        //
    }

    
    public function destroy(Car $car)
    {
        //
    }
}

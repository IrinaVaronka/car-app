<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Cat;
use App\Models\Driver;
use Illuminate\Http\Request;

class CarController extends Controller
{
    
    public function index()
    {
        $cars = Car::all();
            
        return view('back.cars.index', [
            'cars' => $cars
        ]);
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
        Car::create([
            'title' => $request->title,
            'driver' => $request->driver
           
        ]);

        return redirect()->route('cars-index');
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

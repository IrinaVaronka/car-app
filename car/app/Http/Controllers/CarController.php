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
            'driver' => $request->driver,
            'cat_id' => $request->cat_id
           
        ]);

        return redirect()->route('cars-index');
    }



    
    public function edit(Car $car)
    {
        $cats = Cat::all();

        return view('back.cars.edit', [
            'car' => $car, 
            'cats' => $cats
        ]);
    }

    
    public function update(Request $request, Car $car)
    {
        $car->title = $request->title;
        $car->driver = $request->driver;
        $car->save();
        return redirect()
            ->route('cars-index');
    }

    
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars-index');
    }
}

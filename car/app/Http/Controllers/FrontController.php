<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Cat;

class FrontController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('front.index', [
            'cars' => $cars
        ]);
    }

    public function catCars(Cat $cat)
    {
        $cars = $cat->car;

        return view('front.cat-index', [
            'cars' => $cars, 
            'cat' => $cat
        ]);
    }

    public function showCar(Car $car)
    {
        return view('front.car', [
            'car' => $car, 
            
        ]);
    }
}

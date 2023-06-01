<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class FrontController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('front.index', [
            'cars' => $cars
        ]);
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    
    public function index()
    {
        $cats = Cat::all();

        return view('back.cats.index', [
            'cats' => $cats
        ]);
    }

    
    public function create()
    {
        return view('back.cats.create', [
        ]);
    }

    
    public function store(Request $request)
    {
        Cat::create([
            'title' => $request->title,
            'address' => $request->address,
            'lead' => $request->lead,
        ]);

        return redirect()->route('cats-index');
    }

    
    public function edit(Cat $cat)
    {
        return view('back.cats.edit', [
            'cat' => $cat
        ]);
    }

    
    public function update(Request $request, Cat $cat)
    {
        $cat->update([
            'title' => $request->title,
            'address' => $request->address,
            'lead' => $request->lead,
        ]);
        return redirect()->route('cats-index');
    }

    
    public function destroy(Cat $cat)
    {
        $cat->delete();
        return redirect()->route('cats-index');
    }
}

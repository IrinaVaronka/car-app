<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController as C;
use App\Http\Controllers\CarController as Car;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('cats')->name('cats-')->group(function () {
    Route::get('/', [C::class, 'index'])->name('index');
    Route::get('/create', [C::class, 'create'])->name('create');
    Route::post('/create', [C::class, 'store'])->name('store');
    Route::get('/{cat}', [C::class, 'show'])->name('show');
    Route::get('/edit/{cat}', [C::class, 'edit'])->name('edit');
    Route::put('/edit/{cat}', [C::class, 'update'])->name('update');
    Route::delete('/delete/{cat}', [C::class, 'destroy'])->name('delete');
    });

Route::prefix('cars')->name('cars-')->group(function () {
    Route::get('/', [Car::class, 'index'])->name('index')->middleware('role:admin|client');
    Route::get('/create', [Car::class, 'create'])->name('create')->middleware('role:admin');
    Route::post('/create', [Car::class, 'store'])->name('store')->middleware('role:admin');
    Route::get('/{car}', [Car::class, 'show'])->name('show')->middleware('role:admin');
    Route::get('/edit/{car}', [Car::class, 'edit'])->name('edit')->middleware('role:admin');
    Route::put('/edit/{car}', [Car::class, 'update'])->name('update')->middleware('role:admin');
    Route::delete('/delete/{car}', [Car::class, 'destroy'])->name('delete')->middleware('role:admin');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

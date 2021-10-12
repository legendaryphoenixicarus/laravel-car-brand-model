<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('car_brands', App\Http\Controllers\CarBrandsController::class);
Route::get('/car_brands', [App\Http\Controllers\CarBrandsController::class, 'index'])->name('car_brands.index');
Route::get('/car_brands/create', [App\Http\Controllers\CarBrandsController::class, 'create'])->name('car_brands.create');
Route::post('/car_brands', [App\Http\Controllers\CarBrandsController::class, 'store'])->name('car_brands.store');
Route::get('/car_brands/{id}', [App\Http\Controllers\CarBrandsController::class, 'edit'])->name('car_brands.edit');
Route::put('/car_brands/{id}', [App\Http\Controllers\CarBrandsController::class, 'update'])->name('car_brands.update');
Route::delete('/car_brands/{id}', [App\Http\Controllers\CarBrandsController::class, 'destroy'])->name('car_brands.destroy');

Route::get('/car_models', [App\Http\Controllers\CarModelsController::class, 'index'])->name('car_models.index');
Route::get('/car_models/create', [App\Http\Controllers\CarModelsController::class, 'create'])->name('car_models.create');
Route::post('/car_models', [App\Http\Controllers\CarModelsController::class, 'store'])->name('car_models.store');
Route::get('/car_models/{id}', [App\Http\Controllers\CarModelsController::class, 'edit'])->name('car_models.edit');
Route::put('/car_models/{id}', [App\Http\Controllers\CarModelsController::class, 'update'])->name('car_modelds.update');
Route::delete('/car_models/{id}', [App\Http\Controllers\CarModelsController::class, 'destroy'])->name('car_models.destroy');
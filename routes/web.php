<?php

use Illuminate\Support\Facades\Artisan;
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

    // Ejecutar migraciones
    Artisan::call('migrate');

    // Ejecutar seeders
    Artisan::call('db:seed');
    
    return redirect('inicio');
});

Route::resource('inicio', EmpleadoController::class);

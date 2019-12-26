<?php

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

// Main Page Routes

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/contact', function () {
    return view('contact');
});

//Inner pages Routes
Route::get('/features/accounting', function () {
    return view('accounting');
});

Route::get('/features/engagment', function () {
    return view('engagment');
});

Route::get('/features/integration', function () {
    return view('integration');
});

Route::get('/features/inventory', function () {
    return view('inventory');
});

Route::get('/features/point-of-sale', function () {
    return view('point-of-sale');
});

Route::get('/features/reports', function () {
    return view('reports');
});


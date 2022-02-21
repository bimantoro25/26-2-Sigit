<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Sigit Bimantoro",
        "email" => "sigitbimatoro@gmail.com",
        "gambar" => "paramex.jpg",
    ]);
});

Route::get('/gallery', function () {
    return view('gallery');
});


Route::resource('/contact', ContactController::class);
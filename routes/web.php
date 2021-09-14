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
    //return view('welcome');
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/productoras', function () {
    return view('productoras.index');
})->middleware(['auth'])->name('productoras');

Route::get('/obras', function () {
    return view('obras.index');
})->middleware(['auth'])->name('obras');

Route::get('/socios', function () {
    return view('socios.index');
})->middleware(['auth'])->name('socios');

Route::get('/my-info', function () {
    return view('myinfo.index');
})->middleware(['auth'])->name('myinfo');

require __DIR__ . '/auth.php';

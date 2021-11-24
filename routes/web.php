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
    return view('welcome');
});

Route::get('/landing_page', function () {
    return 'Welcome to home page';
});

Route::get('/profil', function () {
    return view('profil');
});

//dont forget for use App\Http\Controllers\HomeController

Route::get('/home','App\Http\Controllers\HomeController@index');

// Route::get('/home/edit{id}', [App\Http\Controllers\HomeController::class, 'edit']);

Route::get('/home/tambah', 'App\Http\Controllers\HomeController@tambahData');

Route::get('/home/simpan', 'App\Http\Controllers\HomeController@simpan');

Route::get('/home/edit/{id}', 'App\Http\Controllers\HomeController@edit');

Route::get('/home/hapus/{id}', 'App\Http\Controllers\HomeController@hapus');

Route::get('/home/update', 'App\Http\Controllers\HomeController@update');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

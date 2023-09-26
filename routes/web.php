<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KampusController;
use App\Http\Controllers\HomeController;

Route::get('/', [DepanController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/kampus', [KampusController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);


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

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/kampus', function () {
    return view('kampus');
});




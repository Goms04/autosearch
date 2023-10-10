<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\LoginController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/accueil',DomaineController::class . '@accueil')->name('accueil')->middleware('auth');
Route::get('/search',DomaineController::class . '@display')->name('search')->middleware('auth');
Route::post('/domaine/create',DomaineController::class . '@create')->name('domaine.create');
Route::post('/domaine/update/{id}',DomaineController::class . '@update')->name('domaine.update');
Route::post('/domaine/delete/{id}',DomaineController::class . '@delete')->name('domaine.delete');
Route::get('/domaine/query',DomaineController::class . '@query')->name('query');
Route::post('/domaine/result',DomaineController::class . '@result')->name('result');
Route::get('/domaine/import',DomaineController::class . '@import')->name('import')->middleware('auth');
Route::post('/Recherche/upload',DomaineController::class . '@importcsv')->name('upload');
Route::get('/',LoginController::class . '@Slogin')->name('login');
Route::post('/login/validate',LoginController::class . '@login')->name('login.go');
Route::get('/logout',LoginController::class . '@Slogout')->name('logout')->middleware('auth');
Route::get('/register',LoginController::class . '@register')->name('register');
Route::post('/signup',LoginController::class . '@signup')->name('signup');



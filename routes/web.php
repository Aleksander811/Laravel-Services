<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\ServiceController;

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

// Meistrai
Route::get('/', [SpecialistController::class, 'index']);
Route::get('/add-specialist', [SpecialistController::class, 'addSpecialist']);
Route::post('/storeSpecialist', [SpecialistController::class, 'store']);
Route::get('/specialist/{specialist}', [SpecialistController::class, 'showSpecialist']);     // po /paduodam ta kintamaji(specialist) kuri parasem metode, o gale metodo pavadinimas showSpecialist
Route::get('/specialist/edit/{specialist}', [SpecialistController::class, 'editSpecialist']);
Route::post('/update/{specialist}', [SpecialistController::class, 'storeUpdate']);
Route::get('/specialist/delete/{specialist}', [SpecialistController::class, 'deleteSpecialist']);


// Servisai
Route::get('/add-service', [ServiceController::class, 'create']);
Route::post('/storeService', [ServiceController::class, 'store']);
Route::get('/all-services', [ServiceController::class, 'index']);
Route::get('/service/delete/{service}', [ServiceController::class, 'destroy']);
Route::get('/service/edit/{service}', [ServiceController::class, 'edit']);
Route::post('/service/update/{service}', [ServiceController::class, 'update']);
Route::get('/service/{service}', [ServiceController::class, 'showService']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
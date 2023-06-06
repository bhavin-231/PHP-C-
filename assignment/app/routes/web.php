<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'valid_login']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'valid_register']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/autocomplete-search', [DashboardController::class, 'autocompleteSearch']);
Route::get('/medicine',[MedicineController::class,'listofmedicine']);
Route::get('/addmedicine',[MedicineController::class,'addmedicine']);
Route::post('/addmedicine',[MedicineController::class,'store']);
Route::any('/editmed/{id}',[MedicineController::class,'edit']);
Route::any('/updatemedicine/{id}',[MedicineController::class,'update']);
Route::any('/deletemed/{id}',[MedicineController::class,'destroy']);

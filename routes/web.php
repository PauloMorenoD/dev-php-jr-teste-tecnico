<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AcademyController;
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


Route::get('/',[UserController::class, 'index']);
Route::get('/home', [AcademyController::class, 'index']);
Route::get('/academies/create', [AcademyController::class, 'create']);
Route::get('/user', [UserController::class, 'register']);
Route::get('/academies/edit/{id}', [AcademyController::class, 'edit']);


Route::post('/create', [AcademyController::class, 'store']);
Route::post('/register', [UserController::class, 'create']);
Route::get('/auth/login',[UserController::class, 'auth']);
Route::put('/academies/update/{id}',[AcademyController::class, 'update']);
Route::delete('/academies/{id}', [AcademyController::class, 'destroy']);

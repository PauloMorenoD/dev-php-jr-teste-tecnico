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
Route::get('/register', [UserController::class, 'register']);
Route::get('/home', [AcademyController::class, 'index']);
Route::get('/academies/create', [AcademyController::class, 'create']);
Route::post('/create', [AcademyController::class, 'store']);

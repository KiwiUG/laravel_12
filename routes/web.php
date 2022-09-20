<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class,'welcome']);
Route::get('/create', [PagesController::class,'create']);
Route::post('/create', [PagesController::class,'store']);
Route:: get('/main',[PagesController::class,'main']);
Route:: get('/profile/{id}/{name}',[PagesController::class,'profile']);
Route::get('/list',[PagesController::class,'list']);

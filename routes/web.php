<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;


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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/', [PagesController::class, 'home']);

Route::get('/geschiedenis', [PagesController::class, 'geschiedenis']);
Route::get('/programma', [PagesController::class, 'programma']);
Route::get('/de-tien', [PagesController::class, 'tien']);
Route::get('/sponsoren', [PagesController::class, 'sponsoren']);
Route::get('/merchandise', [PagesController::class, 'merchandise']);
Route::get('/media', [PagesController::class, 'media']);
Route::get('/info', [PagesController::class, 'info']);


Route::get('/make_album', [AdminController::class, 'album']);


Route::get('/make_album/{name}', [AdminController::class, 'album']);

Route::get('/admin', [AdminController::class, 'index']);

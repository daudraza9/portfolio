<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

/*--LANDING ROUTES--*/
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('about-us');
Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [FrontController::class, 'contactUs'])->name('contact-us');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

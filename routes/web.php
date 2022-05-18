<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PortfolioController;
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
Route::get('/person/{slug}', [FrontController::class, 'person'])->name('person');
Route::get('/about-us/{slug}', [FrontController::class, 'aboutUs'])->name('about-us');
Route::get('/portfolio/{slug}', [FrontController::class, 'portfolio'])->name('portfolio');
Route::get('/contact/{slug}', [FrontController::class, 'contactUs'])->name('contact-us');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*--Admin Routes--*/
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');

        /*--People Routes--*/
        Route::group(['prefix' => 'person', 'as' => 'person.'], function () {
            Route::get('/', [PersonController::class, 'index'])->name('index');
            Route::get('/manage-person', [PersonController::class, 'managePerson'])->name('manage-person');
            Route::post('/insert', [PersonController::class, 'insert'])->name('insert');
            Route::get('/edit/{id}', [PersonController::class, 'edit'])->name('edit');
            Route::post('/update', [PersonController::class, 'update'])->name('update');
            Route::get('/delete', [PersonController::class, 'delete'])->name('delete');
            Route::get('/select-person', [PersonController::class, 'selectPerson'])->name('select-person');
            Route::get('/change-visibility/{is_home}{id}', [PersonController::class, 'changeVisibility'])->name('change-visibility');
        });

        /*--Portfolio Routes--*/
        Route::group(['prefix' => 'portfolio', 'as' => 'portfolio.'], function () {
            Route::get('/', [PortfolioController::class, 'index'])->name('index');
            Route::get('/manage-portfolio', [PortfolioController::class, 'managePortfolio'])->name('manage-portfolio');
            Route::post('/insert', [PortfolioController::class, 'insert'])->name('insert');
            Route::get('/edit/{id}', [PortfolioController::class, 'edit'])->name('edit');
            Route::post('/update', [PortfolioController::class, 'update'])->name('update');
            Route::get('/delete', [PortfolioController::class, 'delete'])->name('delete');
        });
    });
});

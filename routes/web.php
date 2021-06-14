<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\App;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Form Request Validation and Google Recaptcha
Route::get('/form', [FormController::class, 'index'])->name('form');
Route::post('/form', [FormController::class, 'store']);

// Algolia Search
Route::get('/search/{searchKey}', [SearchController::class, 'index'])->name('search');

Route::get('locale/{lang?}', function($lang=null) {
    App::setLocale($lang);
    return view('locale');
});
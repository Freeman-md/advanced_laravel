<?php

use App\Events\TaskEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Jobs\SendEmail;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Form Request Validation and Google Recaptcha
Route::get('/form', [FormController::class, 'index'])->name('form');
Route::post('/form', [FormController::class, 'store']);

// Algolia Search
Route::get('/search/{searchKey}', [SearchController::class, 'index'])->name('search');

// Localization
Route::get('/locale/{lang?}', function($lang=null) {
    App::setLocale($lang);
    return view('locale');
});

// Send Email
Route::get('/send', function() {
    $job = (new SendEmail())->delay(now()->addSeconds(5));
    dispatch($job);
    return 'Email has been sent';
});

// Events
Route::get('/event', function() {
    event(new TaskEvent('Hey! How are you.'));
});

// Broadcasts 
Route::get('/listen', function() {
    return view('listenBroadcast');
});
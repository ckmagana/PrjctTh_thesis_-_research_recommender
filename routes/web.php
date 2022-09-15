<?php

use App\Http\Controllers\GuestViewsController;
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

Route::get('/guestaccountancy', [GuestViewsController::class, 'guestaccountancy']);
Route::get('/guestartsandscience', [GuestViewsController::class, 'guestartsandscience']);
Route::get('/guestcomputerstudies', [GuestViewsController::class, 'guestcomputerstudies']);
Route::get('/guestaccountancyeducation', [GuestViewsController::class, 'guestaccountancyeducation']);
Route::get('/guestengineering', [GuestViewsController::class, 'guestengineering']);
Route::get('/guesthotelmanagement', [GuestViewsController::class, 'guesthotelmanagement']);
Route::get('/guestnursing', [GuestViewsController::class, 'guestnursing']);
Route::get('/guesthomepage', [GuestViewsController::class, 'guesthomepage']);
Route::get('/accountancy', [SessionViewsController::class, 'accountancy']);
Route::get('/artsandscience', [SessionViewsController::class, 'artsandscience']);
Route::get('/computerstudies', [SessionViewsController::class, 'computerstudies']);
Route::get('/accountancyeducation', [SessionViewsController::class, 'accountancyeducation']);
Route::get('/engineering', [SessionViewsController::class, 'engineering']);
Route::get('/hotelmanagement', [SessionViewsController::class, 'hotelmanagement']);
Route::get('/nursing', [SessionViewsController::class, 'nursing']);
Route::get('/homepage', [SessionViewsController::class, 'homepage']);




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

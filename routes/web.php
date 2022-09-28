<?php

use App\Http\Controllers\GuestViewsController;
use App\Http\Controllers\SessionViewsController;
use App\Http\Controllers\AdminViewsController;
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
Route::get('/guesteducation', [GuestViewsController::class, 'guesteducation']);
Route::get('/guestengineering', [GuestViewsController::class, 'guestengineering']);
Route::get('/guesthotelmanagement', [GuestViewsController::class, 'guesthotelmanagement']);
Route::get('/guestnursing', [GuestViewsController::class, 'guestnursing']);
Route::get('/guesthomepage', [GuestViewsController::class, 'guesthomepage']);
Route::get('/accountancy', [SessionViewsController::class, 'accountancy']);
Route::get('/artsandscience', [SessionViewsController::class, 'artsandscience']);
Route::get('/computerstudies', [SessionViewsController::class, 'computerstudies']);
Route::get('/education', [SessionViewsController::class, 'education']);
Route::get('/engineering', [SessionViewsController::class, 'engineering']);
Route::get('/hotelmanagement', [SessionViewsController::class, 'hotelmanagement']);
Route::get('/nursing', [SessionViewsController::class, 'nursing']);
Route::get('/homepage', [SessionViewsController::class, 'homepage']);
Route::get('/profilepage', [SessionViewsController::class, 'profilepage']);
Route::get('/manageaccount', [AdminViewsController::class, 'manageaccount']);
Route::get('/managedocument', [AdminViewsController::class, 'managedocument']);
Route::get('/addnewaccount', [AdminViewsController::class, 'addnewaccount']);
Route::get('/addnewdocument', [AdminViewsController::class, 'addnewdocument']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

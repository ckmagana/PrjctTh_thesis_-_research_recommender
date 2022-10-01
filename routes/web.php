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

Route::get('/GuestViews/guestaccountancy', [GuestViewsController::class, 'guestaccountancy']);
Route::get('/GuestViews/guestartsandscience', [GuestViewsController::class, 'guestartsandscience']);
Route::get('/GuestViews/guestcomputerstudies', [GuestViewsController::class, 'guestcomputerstudies']);
Route::get('/GuestViews/guesteducation', [GuestViewsController::class, 'guesteducation']);
Route::get('/GuestViews/guestengineering', [GuestViewsController::class, 'guestengineering']);
Route::get('/GuestViews/guesthotelmanagement', [GuestViewsController::class, 'guesthotelmanagement']);
Route::get('/GuestViews/guestnursing', [GuestViewsController::class, 'guestnursing']);
Route::get('/GuestViews/guesthomepage', [GuestViewsController::class, 'guesthomepage']);
Route::get('/SessionViews/accountancy', [SessionViewsController::class, 'accountancy']);
Route::get('/SessionViews/artsandscience', [SessionViewsController::class, 'artsandscience']);
Route::get('/SessionViews/computerstudies', [SessionViewsController::class, 'computerstudies']);
Route::get('/SessionViews/education', [SessionViewsController::class, 'education']);
Route::get('/SessionViews/engineering', [SessionViewsController::class, 'engineering']);
Route::get('/SessionViews/hotelmanagement', [SessionViewsController::class, 'hotelmanagement']);
Route::get('/SessionViews/nursing', [SessionViewsController::class, 'nursing']);
Route::get('/SessionViews/homepage', [SessionViewsController::class, 'homepage']);
Route::get('/SessionViews/recommendationpage', [SessionViewsController::class, 'recommendationpage']);
Route::get('/SessionViews/savedpage', [SessionViewsController::class, 'savedpage']);
Route::get('/SessionViews/profilepage', [SessionViewsController::class, 'profilepage']);
Route::get('/AdminViews/manageaccount', [AdminViewsController::class, 'manageaccount']);
Route::get('/AdminViews/managedocument', [AdminViewsController::class, 'managedocument']);
Route::get('/AdminViews/addnewaccount', [AdminViewsController::class, 'addnewaccount']);
Route::get('/AdminViews/addnewdocument', [AdminViewsController::class, 'addnewdocument']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

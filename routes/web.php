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

Route::get('/', [GuestViewsController::class, 'guestaccountancy']);
Route::get('/', [GuestViewsController::class, 'GuestViewsController@guestartsandscience']);
Route::get('/', [GuestViewsController::class, 'GuestViewsController@guestcomputerstudies']);
Route::get('/', [GuestViewsController::class, 'GuestViewsController@guestaccountancyeducation']);
Route::get('/', [GuestViewsController::class, 'GuestViewsController@guestengineering']);
Route::get('/', [GuestViewsController::class, 'GuestViewsController@guesthotelmanagement']);
Route::get('/', [GuestViewsController::class, 'GuestViewsController@guestnursing']);
Route::get('/', [GuestViewsController::class, 'GuestViewsController@guesthomepage']);
Route::get('/', [SessionViewsController::class, 'SessionViewsController@accountancy']);
Route::get('/', [SessionViewsController::class, 'SessionViewsController@artsandscience']);
Route::get('/', [SessionViewsController::class, 'SessionViewsController@computerstudies']);
Route::get('/', [SessionViewsController::class, 'SessionViewsController@accountancyeducation']);
Route::get('/', [SessionViewsController::class, 'SessionViewsController@engineering']);
Route::get('/', [SessionViewsController::class, 'SessionViewsController@hotelmanagement']);
Route::get('/', [SessionViewsController::class, 'SessionViewsController@nursing']);
Route::get('/', [SessionViewsController::class, 'SessionViewsController@homepage']);




Route::get('/', function () {
    return view('welcome');
});

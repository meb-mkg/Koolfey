<?php
use Illuminate\Http\Request;

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
//koolfey routes
Route::group(['namespace' => 'Koolfey\Koolfey\Http\Controllers', 'middleware' => ['web']], function() {
	Route::get('/koolfey', 'KoolfeyLoginController@index')->name('koolfey');
	Route::post('/koolfey', 'KoolfeyLoginController@checklogin');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MoveMiddleware;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'TopController@index')->middleware(MoveMiddleware::class);
Route::get('/move', 'MoveController@index');
Route::get('/acount', 'AcountController@index');
Route::get('/info', 'InfoController@index');
Route::get('/other', 'OtherController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

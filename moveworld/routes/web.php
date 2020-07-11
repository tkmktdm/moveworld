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
#Route::get('/', 'TopController@index')->middleware(MoveMiddleware::class);
Auth::routes();
Route::get('/', 'TopController@index')->name('home');

Route::prefix('kotonoha')->group(function () {
    Route::get('/', 'TopController@index')->middleware(MoveMiddleware::class)->name('kotonoha.home');
    Route::get('move', 'MoveController@index')->name('move');
    Route::get('acount', 'AcountController@index')->name('acount');
    Route::get('info', 'InfoController@index')->name('info');
    Route::get('other', 'OtherController@index')->name('other');
    Route::get('chat','ChatController@index')->name('chat');
    Route::get('chat/add','ChatController@add')->name('chat.add');
    Route::post('chat/add','Chatcontroller@create')->name('chat.create'); 
});
/*
Route::get('/move', 'MoveController@index');
Route::get('/acount', 'AcountController@index')->name('acount_index');
Route::get('/info', 'InfoController@index');
Route::get('/other', 'OtherController@index');
Route::get('chat','ChatController@index');
Route::get('chat/add','ChatController@add');
Route::post('chat/add','Chatcontroller@create');
 */

Route::get('/home', 'HomeController@index');

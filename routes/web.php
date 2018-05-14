<?php

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
use Illuminate\Support\Facades\Input;
use App\Library;
Route::get('/welcome', function () {
	$datas = Library::all();
    return view('welcome')->with('datas', $datas);
});
Route::get('/', 'UserController@index');
Route::get('/deleted', 'UserController@deleted');
Route::post('/save', 'UserController@save');
Route::get('/search', 'UserController@search');
Route::get('/searchuser', 'UserController@searchuser');
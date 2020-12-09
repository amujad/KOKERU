<?php

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

Route::get('/', function () {
    $ruangan = DB::select('select r.nama, r.status, u.name from ruangan r, users u where r.cs_id=u.id');
    return view('home',['ruangan' => $ruangan]);
});

Route::get('login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');
// auth
// auth -> manajer || cs

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:manajer']], function () {
        Route::get('manajer','App\Http\Controllers\ManajerController@index')->name('manajer');
    });

    Route::group(['middleware' => ['cek_login:cs']], function () {
        Route::get('cs','App\Http\Controllers\CsController@index')->name('cs');
    });
});
Route::resource('users', 'App\Http\Controllers\crudController');
Route::get('/users/{id}/show', 'App\Http\Controllers\crudController@show');
Route::get('/users/{id}/edit', 'App\Http\Controllers\crudController@edit');
Route::DELETE('/users/{id}', 'App\Http\Controllers\crudController@destroy');

<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');

    //ROTA PARA EDIÇÃO DE DIARIOS
    Route::prefix('diarios')->group(function () {
        Route::post('/diario', 'DiarioController@index')->name('diario.index');
        Route::post('/diario/store', 'DiarioController@store')->name('diario.store');
        Route::post('/diario/update/{diario}', 'DiarioController@update')->name('diaro.update');
        Route::post('/diario/destroy/{diario}', 'DiarioController@store')->name('diario.destroy');
    });

    //ROTAS PARA EDIÇÃO DE OBJETIVOS
    Route::prefix('objetivos')->group(function () {
        Route::post('/objetivo', 'ObjetivoController@index')->name('objetivo.index');
        Route::post('/objetivo/store', 'ObjetivoController@store')->name('objetivo.store');
        Route::post('/objetivo/update/{objetivo}', 'ObjetivoController@update')->name('objetivo.update');
        Route::post('/objetivo/destroy/{objetivo}', 'ObjetivoController@store')->name('objetivo.destroy');
    });

    //ROTAS PARA EDIÇÃO DE USUARIO
    route::prefix('users')->group(function(){
        Route::post('/user/update', 'UserController@update')->name('user.update');
        Route::get('/user/delete', 'UserController@delete')->name('user.delete');
        Route::get('/user/destroy', 'UserController@destroy')->name('user.destroy');
    });
});

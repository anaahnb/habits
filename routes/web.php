<?php

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
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    //ROTA PARA EDIÇÃO DE DIARIOS
    Route::prefix('diarios')->group(function () {
        Route::post('/diario', 'DiarioController@index')->name('diario.index');
        Route::post('/diario/store', 'DiarioController@store')->name('diario.store');
        Route::post('/diario/update/{diario}', 'DiarioController@update')->name('diaro.update');
        Route::post('/diario/destroy/{diario}', 'DiarioController@store')->name('diario.destroy');
    });

    //ROTAS PARA EDIÇÃO DE OBJETIVOS
    Route::prefix('objetivos')->group(function () {
        Route::post('diario/{diario}/objetivo/store', 'ObjetivoController@store')->name('objetivo.store');
        Route::post('diario/{diario}/objetivo/update/{objetivo}', 'ObjetivoController@update')->name('objetivo.update');
        Route::post('diario/{diario}/objetivo/destroy/{objetivo}', 'ObjetivoController@store')->name('objetivo.destroy');
    });
});

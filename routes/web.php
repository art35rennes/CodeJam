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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/db/test', function () {
    dd(DB::table('test')->get());
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//Batiment
Route::get('/batiments', 'BatimentController@index')->name('batiments.index');
Route::get('/batiments/create', 'BatimentController@create')->name('batiments.create');
Route::post('/batiments', 'BatimentController@store')->name('batiments.store');
Route::get('/batiments/{batiment}', 'BatimentController@show')->name('batiments.show');
Route::get('/batiments/{batiment}/edit', 'BatimentController@edit')->name('batiments.edit');
Route::patch('/batiments/{batiment}', 'BatimentController@update')->name('batiments.update');
Route::delete('/batiments/{batiment}', 'BatimentController@destroy')->name('batiments.destroy');

//Installation
Route::get('/installations', 'InstallationController@list')->name('installations.list');
Route::get('/batiments/{batiment}/installations', 'InstallationController@index')->name('installations.index');
Route::get('/batiments/{batiment}/installations/create', 'InstallationController@create')->name('installations.create');
Route::post('/batiments/installations/{batiment}', 'InstallationController@store')->name('installations.store');
Route::get('/batiments/{batiment}/installations/{installation}', 'InstallationController@show')->name('installations.show');
Route::get('/batiments/{batiment}/installations/{installation}/edit', 'InstallationController@edit')->name('installations.edit');
Route::patch('/batiments/{batiment}/installations/{installation}', 'InstallationController@update')->name('installations.update');
Route::delete('/batiments/{batiment}/installations/{installation}', 'InstallationController@destroy')->name('installations.destroy');

//Problèmes
Route::get('/problemes', 'ProblemeController@index')->name('problemes.index');
Route::get('/problemes/create', 'ProblemeController@create')->name('problemes.create');
Route::post('/problemes', 'ProblemeController@store')->name('problemes.store');
Route::get('/problemes/{probleme}', 'ProblemeController@show')->name('problemes.show');
Route::get('/problemes/{probleme}/edit', 'ProblemeController@edit')->name('problemes.edit');
Route::patch('/problemes/{probleme}', 'ProblemeController@update')->name('problemes.update');
Route::delete('/problemes/{probleme}', 'ProblemeController@destroy')->name('problemes.destroy');

//Solutions
Route::get('/problemes/{probleme}/solutions', 'SolutionController@index')->name('solutions.index');
Route::get('/problemes/{probleme}/solutions/create', 'SolutionController@create')->name('solutions.create');
Route::post('/problemes/{probleme}/solutions', 'SolutionController@store')->name('solutions.store');
Route::get('/problemes/{probleme}/solutions/{solution}', 'SolutionController@show')->name('solutions.show');
Route::get('/problemes/{probleme}/solutions/{solution}/edit', 'SolutionController@edit')->name('solutions.edit');
Route::patch('/problemes/{probleme}/solutions/{solution}', 'SolutionController@update')->name('solutions.update');
Route::delete('/problemes/{probleme}/solutions/{solution}', 'SolutionController@destroy')->name('solutions.destroy');

//Model
Route::get('/models', 'ModelController@index')->name('models.index');
Route::get('/models/create', 'ModelController@create')->name('models.create');
Route::post('/models', 'ModelController@store')->name('models.store');
Route::get('/models/{model}', 'ModelController@show')->name('models.show');
Route::get('/models/{model}/edit', 'ModelController@edit')->name('models.edit');
Route::patch('/models/{model}', 'ModelController@update')->name('models.update');
Route::delete('/models/{model}', 'ModelController@destroy')->name('models.destroy');

//Logs
Route::get('/logs', 'LogController@index')->name('logs.index');
Route::get('/logs/create/{type}', 'LogController@create')->where('type', 'batiment|equipement')->name('logs.create');
Route::post('/logs/', 'LogController@store')->name('logs.store');
Route::get('/logs/{log}', 'LogController@show')->name('logs.show');
Route::get('/logs/{log}/edit', 'LogController@edit')->name('logs.edit');
Route::patch('/logs/{log}', 'LogController@update')->name('logs.update');
Route::delete('/logs/{log}', 'LogController@destroy')->name('logs.destroy');


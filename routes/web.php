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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/db/test', function () {
    dd(DB::table('test')->get());
});

Auth::routes();

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
Route::get('/batiments/{batiment}/installations', 'InstallationController@index')->name('installations.index');
Route::get('/batiments/{batiment}/installations/create', 'InstallationController@create')->name('installations.create');
Route::post('/batiments/{batiment}/installations', 'InstallationController@store')->name('installations.store');
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

//Installation_Solutions
Route::get('/problemes/{probleme}/solutions', 'InstallationSolutionController@index')->name('installation_solutions.index');
Route::get('/problemes/{probleme}/solutions/create', 'InstallationSolutionController@create')->name('installation_solutions.create');
Route::post('/problemes/{probleme}/solutions', 'InstallationSolutionController@store')->name('installation_solutions.store');
Route::get('/problemes/{probleme}/solutions/{solution}', 'InstallationSolutionController@show')->name('installation_solutions.show');
Route::get('/problemes/{probleme}/solutions/{solution}/edit', 'InstallationSolutionController@edit')->name('installation_solutions.edit');
Route::patch('/problemes/{probleme}/solutions/{solution}', 'InstallationSolutionController@update')->name('installation_solutions.update');
Route::delete('/problemes/{probleme}/solutions/{solution}', 'InstallationSolutionController@destroy')->name('installation_solutions.destroy');

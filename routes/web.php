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
Route::get('/batiments/installations/create', 'InstallationController@create')->name('installations.create');
Route::post('/batiments/installations/{batiment?}', 'InstallationController@store')->name('installations.store');
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

//Produits
Route::get('/produits', 'ProduitController@index')->name('produits.index');
Route::get('/produits/create', 'ProduitController@create')->name('produits.create');
Route::post('/produits', 'ProduitController@store')->name('produits.store');
Route::get('/produits/{produit}', 'ProduitController@show')->name('produits.show');
Route::get('/produits/{produit}/edit', 'ProduitController@edit')->name('produits.edit');
Route::patch('/produits/{produit}', 'ProduitController@update')->name('produits.update');
Route::delete('/produits/{produit}', 'ProduitController@destroy')->name('produits.destroy');

//Equipements
Route::get('/equipements', 'EquipementController@index')->name('equipements.index');
Route::get('/equipements/list', 'EquipementController@index')->name('equipements.list');
Route::get('/equipements/create', 'EquipementController@create')->name('equipements.create');
Route::post('/equipements', 'EquipementController@store')->name('equipements.store');
Route::get('/equipements/{produit}', 'EquipementController@show')->name('equipements.show');
Route::get('/equipements/{produit}/edit', 'EquipementController@edit')->name('equipements.edit');
Route::patch('/equipements/{produit}', 'EquipementController@update')->name('equipements.update');
Route::delete('/equipements/{produit}', 'EquipementController@destroy')->name('equipements.destroy');

//Logs
Route::get('/logs', 'LogController@index')->name('logs.index');
Route::get('/logs/create/{type}', 'LogController@create')->where('type', 'batiment|equipement')->name('logs.create');
Route::post('/logs/', 'LogController@store')->name('logs.store');
Route::get('/logs/{log}', 'LogController@show')->name('logs.show');
Route::get('/logs/{log}/edit', 'LogController@edit')->name('logs.edit');
Route::patch('/logs/{log}', 'LogController@update')->name('logs.update');
Route::delete('/logs/{log}', 'LogController@destroy')->name('logs.destroy');

//Panneaux
Route::get('/panneaux', 'PanneauController@index')->name('panneaux.index');
Route::get('/panneaux/create', 'PanneauController@create')->name('panneaux.create');
Route::post('/panneaux', 'PanneauController@store')->name('panneaux.store');
Route::get('/panneaux/{produit}', 'PanneauController@show')->name('panneaux.show');
Route::get('/panneaux/{produit}/edit', 'PanneauController@edit')->name('panneaux.edit');
Route::patch('/panneaux/{produit}', 'PanneauController@update')->name('panneaux.update');
Route::delete('/panneaux/{produit}', 'PanneauController@destroy')->name('panneaux.destroy');

//Batteries
Route::get('/batteries', 'BatterieController@index')->name('batteries.index');
Route::get('/batteries/create', 'BatterieController@create')->name('batteries.create');
Route::post('/batteries', 'BatterieController@store')->name('batteries.store');
Route::get('/batteries/{batterie}', 'BatterieController@show')->name('batteries.show');
Route::get('/batteries/{batterie}/edit', 'BatterieController@edit')->name('batteries.edit');
Route::patch('/batteries/{batterie}', 'BatterieController@update')->name('batteries.update');
Route::delete('/batteries/{batterie}', 'BatterieController@destroy')->name('batteries.destroy');

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
Auth::routes();

Route::get('/', 'HomeController@index');

/* Route::get('/backend', array ('as' => 'admin',
'uses' => 'IndexController@index')); */


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/status', 'StatusController@index');
Route::get('/probable_incidents', 'IncidentsController@index');
Route::get('/underlying_risk', 'RiskController@index');
Route::get('/anomaly', 'AnomalyController@index');
Route::get('/duplication_reports', 'ReportsController@index');
Route::get('/potential_violation', 'ViolationController@index');
Route::get('/observation', 'ObservationController@index');

Route::get('/getTrendData', 'StatusController@getTrendData');
/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 */
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    /* Schedule */
    Route::get('/schedules', 'ScheduleController@index')->name('schedules');
    Route::get('/schedules/create', 'ScheduleController@create')->name('schedules.create');

    /* Doctor */
    Route::get('/doctors', 'DoctorController@index')->name('doctors');

    /* Schedule */
    Route::get('/patients', 'PatientController@index')->name('patients');

});

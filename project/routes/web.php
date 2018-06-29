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
    Route::get('/schedules', 'ScheduleController@index')->name('schedule.index');
    Route::get('/schedule/create', 'ScheduleController@create')->name('schedule.create');
    Route::post('/schedule/store', 'ScheduleController@store')->name('schedule.store');
    Route::get('/schedule/edit/{id}', 'ScheduleController@edit')->name('schedule.edit');
    Route::put('/schedule/update/{id}', 'ScheduleController@update')->name('schedule.update');
    Route::delete('/schedule/destroy/{id}', 'ScheduleController@destroy')->name('schedule.destroy');

    /* Doctor */
    Route::get('/doctors', 'DoctorController@index')->name('doctor.index');
    Route::get('/doctor/create', 'DoctorController@create')->name('doctor.create');
    Route::post('/doctor/store', 'DoctorController@store')->name('doctor.store');
    Route::get('/doctor/edit/{id}', 'DoctorController@edit')->name('doctor.edit');
    Route::put('/doctor/update/{id}', 'DoctorController@update')->name('doctor.update');
    Route::delete('/doctor/destroy/{id}', 'DoctorController@destroy')->name('doctor.destroy');

    /* Schedule */
    Route::get('/patients', 'PatientController@index')->name('patient.index');
    Route::get('/patient/create', 'PatientController@create')->name('patient.create');
    Route::post('/patient/store', 'PatientController@store')->name('patient.store');
    Route::get('/patient/edit/{id}', 'PatientController@edit')->name('patient.edit');
    Route::put('/patient/update/{id}', 'PatientController@update')->name('patient.update');
    Route::delete('/patient/destroy/{id}', 'PatientController@destroy')->name('patient.destroy');

});

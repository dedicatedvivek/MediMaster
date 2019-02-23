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

Route::get('/new_patient', function () {
    return view('new_patient');
});

Route::get('/new_doctor', function () {
    return view('new_doctor');
});

Route::get('/login_page', function () {
    return view('login_page');
});

Route::get('/doctor_portal', function () {
    return view('doctor_portal');
});

Route::get('/patient_portal', function () {
    return view('patient_portal');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::POST('/insert_patient', 'EntryController@insert_patient');
Route::POST('/insert_doctor', 'EntryController@insert_doctor');

Route::POST('/login_check', 'LoginCheckController@login_check');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

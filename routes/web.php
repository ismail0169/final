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
Route::get('home', function () {
    return view('home');
});
Route::get('schedule', function () {
    return view('schedule');
});
Route::get('Flight', function () {
    return view('Flight');
});
Route::get('checkflight', function () {
    return view('checkflight');
});
Route::get('checkschedule', function () {
    return view('checkschedule');
});
Route::post('store',"flightcont@store");
Route::post("checkst","flightcont@checkst");
Route::post("checksc","flightcont@checksc");


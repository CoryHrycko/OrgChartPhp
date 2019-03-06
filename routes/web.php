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

// Going to use this for the main upload page once completed.
//Route::get('/', function () {
//    return view('welcome');
//});
Route::match(['get','post'],'/index.php/org?managerId=1', function ($id) {
    return view('employee');
});
Route::match(['get','post'],'/', function () {
    return view('org');
});
Route::match(['get','post'],'/emp', function () {
    return view('employee');
});
Route::match(['get','post'],'/org?managerId=1', function () {
    return view('employee');
});
//Route::post('/', function () {
//    return view('employee');
//});



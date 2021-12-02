<?php

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

Route::get('/', function () {
    return view('user.landingpage');
});

Route::get('/listsurat', function () {
    return view('user.listsurat.all');
});
Route::get('/listsurat/perusahaan', function () {
    return view('user.listsurat.perusahaan');
});
Route::get('/listsurat/internal', function () {
    return view('user.listsurat.internal');
});
Route::get('/listsurat/personal', function () {
    return view('user.listsurat.personal');
});

Route::get('/listsurat/create', function () {
    return view('user.createtemplate');
});



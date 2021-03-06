<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ListSuratController;
use App\Http\Controllers\FilterSuratController;
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

Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
    return view('user.landingpage');
    })->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/forgetpassword', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('/forgetpassword', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('/resetpassword/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('/resetpassword', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});


Route::get('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {

    Route::resource('listsurat', ListSuratController::class);
     Route::get('listsurat/folder/{id}',  [FilterSuratController::class,'filter']);
       Route::get('/back',  [FilterSuratController::class,'back']);
    Route::get('listsurat/delete/{id}', [ListSuratController::class,'destroy']);
    Route::get('generate/{id}', [FilterSuratController::class,'generate']);
    Route::post('generate/donwload/{id}', [FilterSuratController::class,'download']);
    Route::post('listsurat/{id}/tambah', [ListSuratController::class, 'tambah'])->name('tambahfile');
    Route::post('/tambahfolder', [FilterSuratController::class, 'tambah']);
});

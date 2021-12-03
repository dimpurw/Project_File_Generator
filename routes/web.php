<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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
});

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/forgetpassword', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('/forgetpassword', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('/resetpassword/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/resetpassword', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::group(['middleware' => ['auth']], function () { 
    
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
});



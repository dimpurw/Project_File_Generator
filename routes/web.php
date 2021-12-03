<?php
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

Route::get('/', function () {
    return view('user.landingpage');
});

Route::resource('listsurat', ListSuratController::class);



Route::get('/perusahaan', [FilterSuratController::class, 'perusahaan']);
Route::get('/personal', [FilterSuratController::class, 'personal']);
Route::get('/internal', [FilterSuratController::class, 'internal']);
// Route::get('/listsurat/internal', 'filtersurat@internal');

// Route::get('/listsurat/personal', 'filtersurat@personal');






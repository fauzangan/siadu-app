<?php

use App\Http\Controllers\DashboardAreaController;
use App\Http\Controllers\DashboardAsetController;
use App\Http\Controllers\DashboardGolonganController;
use App\Http\Controllers\LoginController;
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

# Login Route
Route::get('/', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

# Dashboard Menu Route
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

# Dashboard Area Controller
Route::get('/dashboard/areas/hidden', [DashboardAreaController::class, 'showHidden']);
Route::put('/dashboard/areas/hidden/{area}', [DashboardAreaController::class, 'hidden']);
Route::put('/dashboard/areas/restore/{area}', [DashboardAreaController::class, 'restore']);
Route::resource('/dashboard/areas', DashboardAreaController::class);

# Dashboard Golongan Controller
Route::get('/dashboard/golongan-1', [DashboardGolonganController::class, 'showGolongan1']);
Route::get('/dashboard/golongan-2', [DashboardGolonganController::class, 'showGolongan2']);
Route::get('/dashboard/golongan-3', [DashboardGolonganController::class, 'showGolongan3']);
Route::get('/dashboard/golongan-4', [DashboardGolonganController::class, 'showGolongan4']);
Route::get('/dashboard/golongan-5', [DashboardGolonganController::class, 'showGolongan5']);
Route::get('/dashboard/golongan-6', [DashboardGolonganController::class, 'showGolongan6']);
Route::get('/dashboard/golongan-7', [DashboardGolonganController::class, 'showGolongan7']);
Route::get('/dashboard/golongan-8', [DashboardGolonganController::class, 'showGolongan8']);

# Dashboard Aset Controller
Route::get('/dashboard/asets/hidden', [DashboardAsetController::class, 'showHidden']);
Route::resource('/dashboard/asets', DashboardAsetController::class);

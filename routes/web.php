<?php

use App\Http\Controllers\DashboardAdministratorController;
use App\Http\Controllers\DashboardAreaController;
use App\Http\Controllers\DashboardAsetController;
use App\Http\Controllers\DashboardGolonganController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Artisan;
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
Route::get('/dashboard/areas/hidden', [DashboardAreaController::class, 'showHidden'])->middleware('auth');
Route::put('/dashboard/areas/hidden/{area}', [DashboardAreaController::class, 'hidden'])->middleware('auth');
Route::put('/dashboard/areas/restore/{area}', [DashboardAreaController::class, 'restore'])->middleware('auth');
Route::resource('/dashboard/areas', DashboardAreaController::class)->middleware('auth');

# Dashboard Golongan Controller
Route::get('/dashboard/golongan-1', [DashboardGolonganController::class, 'showGolongan1'])->middleware('auth');
Route::get('/dashboard/golongan-2', [DashboardGolonganController::class, 'showGolongan2'])->middleware('auth');
Route::get('/dashboard/golongan-3', [DashboardGolonganController::class, 'showGolongan3'])->middleware('auth');
Route::get('/dashboard/golongan-4', [DashboardGolonganController::class, 'showGolongan4'])->middleware('auth');
Route::get('/dashboard/golongan-5', [DashboardGolonganController::class, 'showGolongan5'])->middleware('auth');
Route::get('/dashboard/golongan-6', [DashboardGolonganController::class, 'showGolongan6'])->middleware('auth');
Route::get('/dashboard/golongan-7', [DashboardGolonganController::class, 'showGolongan7'])->middleware('auth');
Route::get('/dashboard/golongan-8', [DashboardGolonganController::class, 'showGolongan8'])->middleware('auth');

# Dashboard Aset Controller
Route::get('/dashboard/asets/hidden', [DashboardAsetController::class, 'showHidden'])->middleware('auth');
Route::put('/dashboard/asets/hidden/{aset}', [DashboardAsetController::class, 'hidden'])->middleware('auth');
Route::resource('/dashboard/asets', DashboardAsetController::class)->middleware('auth');

# Dashboard Administrator Controller
Route::get('/dashboard/administrators/deactive', [DashboardAdministratorController::class, 'showDeactive'])->middleware('auth');
Route::post('/dashboard/administrators/restore/{user}', [DashboardAdministratorController::class, 'restore'])->middleware('auth');
Route::resource('/dashboard/administrators', DashboardAdministratorController::class)->middleware('auth')->middleware('auth');

// Route::get('/linkstorage', function(){Artisan::call('storage:link');});
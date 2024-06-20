<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\VotersController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['auth', 'check.user.role'])->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::resource('candidate', CandidateController::class)->except(['create']);
    Route::resource('voters', VotersController::class)->except(['create', 'show']);
    Route::resource('admin', AdminController::class)->except(['create', 'show']);

    Route::prefix('voter')->name('voter.')->controller(VoterController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/result', 'result')->name('result');
        Route::get('/{id}', 'show')->name('show');
    });
});

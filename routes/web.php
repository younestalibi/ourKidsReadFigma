<?php

use App\Http\Controllers\UserController;
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


Route::group(['prefix' => 'reading-portal'], function () {
    Route::match(['get', 'post'], '/', [UserController::class, 'our_kids_register'])->name('reading-portal-register');
    Route::post('/login', [UserController::class, 'our_kids_login'])->name('reading-portal-login');
    
    Route::middleware(['auth.session.user'])->group(function () {
        Route::post('/logout', [UserController::class, 'our_kids_logout'])->name('reading-portal-logout');
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

        Route::get('/dashboard/step1', [UserController::class, 'step1'])->name('first-step');
        Route::get('/dashboard/step1/update', [UserController::class, 'updateStep1'])->name('first-step-update');

        Route::get('/dashboard/step2', [UserController::class, 'step2'])->name('second-step');
        Route::post('/dashboard/step2/update', [UserController::class, 'updateStep2'])->name('second-step-update');

        Route::get('/dashboard/step3', [UserController::class, 'step3'])->name('third-step');
        Route::post('/dashboard/step3/update', [UserController::class, 'updateStep3'])->name('third-step-update');

        Route::get('/dashboard/step4', [UserController::class, 'step4'])->name('forth-step');
        Route::post('/dashboard/step4/update', [UserController::class, 'updateStep4'])->name('forth-step-update');

        Route::get('/dashboard/step5', [UserController::class, 'step5'])->name('fifth-step');
        Route::post('/dashboard/step5/update', [UserController::class, 'updateStep5'])->name('fifth-step-update');

        Route::get('/dashboard/step6', [UserController::class, 'step6'])->name('sixth-step');
        Route::post('/dashboard/step6/update', [UserController::class, 'updateStep6'])->name('sixth-step-update');
    });
});
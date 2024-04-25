<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

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
    return view('newdesign.sms');
});

Route::group(['prefix' => 'reading-portal'], function () {
    Route::post('/', [UserController::class, 'our_kids_register'])->name('reading-portal-register');
    Route::get('/register', [UserController::class, 'our_kids_register_form'])->name('reading-portal-register-form');

    Route::get('/', [UserController::class, 'our_kids_login_form'])->name('reading-portal-login-form');
    Route::post('/login', [UserController::class, 'our_kids_login'])->name('reading-portal-login');

    Route::post('/reset-password', [UserController::class, 'ResetPassword'])->name('reset-password');
    Route::get('/reset-password', [UserController::class, 'ResetPasswordForm'])->name('reset-password-form');

    Route::middleware(['auth.session.user'])->group(function () {
        Route::post('/logout', [UserController::class, 'our_kids_logout'])->name('reading-portal-logout');
        Route::get('/onboarding', [UserController::class, 'dashboard'])->name('main-dashboard');
        Route::get('/home', [UserController::class, 'home'])->name('home-dashboard');
        
        Route::post('/dashboard/step1/update', [UserController::class, 'updateStep1'])->name('first-step-update');
        Route::post('/dashboard/step2/update', [UserController::class, 'updateStep2'])->name('second-step-update');
        Route::post('/dashboard/step3/update', [UserController::class, 'updateStep3'])->name('third-step-update');
        Route::post('/dashboard/step3/update/image', [UserController::class, 'updateStep3Image'])->name('third-step-update-image');
        Route::post('/dashboard/step5/update', [UserController::class, 'updateStep5'])->name('fifth-step-update');
        Route::post('/dashboard/step6/update', [UserController::class, 'updateStep6'])->name('sixth-step-update');

        Route::get('/dashboard/training', [UserController::class, 'training'])->name('training');
        Route::get('/dashboard/training/video/{id}', [UserController::class, 'trainingVideo'])->name('training-video');

        Route::prefix('dashboard/student')->middleware(['student'])->group(function () {
            Route::get('step1', [StudentController::class, 'StudentStep1'])->name('student.first-step');
            Route::get('step2', [StudentController::class, 'StudentStep2'])->name('student.second-step');
            Route::get('step3', [StudentController::class, 'StudentStep3'])->name('student.third-step');
            Route::get('step4', [StudentController::class, 'StudentStep4'])->name('student.fifth-step');
            Route::post('step4/update', [StudentController::class, 'updateStep4'])->name('student.forth-step-update');

        });
        Route::prefix('dashboard/reader')->middleware(['reader'])->group(function () {
            Route::get('step1', [UserController::class, 'step1'])->name('reader.first-step');
            Route::get('step2', [UserController::class, 'step2'])->name('reader.second-step');
            Route::get('step3', [UserController::class, 'step3'])->name('reader.third-step');
            Route::get('step4', [UserController::class, 'step4'])->name('reader.forth-step');
            Route::get('step5', [UserController::class, 'step5'])->name('reader.fifth-step');
            Route::get('step6', [UserController::class, 'step6'])->name('reader.sixth-step');
        
            Route::post('step4/update', [UserController::class, 'updateStep4'])->name('reader.forth-step-update');

        });
    });
});

Route::get('/ddsa', function () {
})->name('home');
Route::get('/dddsa', function () {
})->name('free_book_festivals');
Route::get('/ddssa', function () {
})->name('newsletter_24_feb');
Route::get('/daasdsa', function () {
})->name('volunteer');
Route::get('/d=asdsa', function () {
})->name('faq');
Route::get('/dsa', function () {
})->name('contact_us');
Route::get('/aboutsd', function () {
})->name('about');
Route::get('/dasdsmissiona', function () {
})->name('mission');
Route::get('/dsucces_storiessa', function () {
})->name('succes_stories');
Route::get('/dsponsorsdsa', function () {
})->name('sponsors');
Route::get('/dnew_letter_sign_uprsdsa', function () {
})->name('new_letter_sign_up');
Route::get('/dndonate_nwdsa', function () {
})->name('donate_now');

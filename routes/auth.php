<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchController;
use App\Http\Controllers\adminMenuController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::middleware('guest')->group(function () {
    

    Route::get('/prestataire', [RegisteredUserController::class, 'create1'])->name('prestataire');

    Route::get('/entreprise', [RegisteredUserController::class, 'create2']);

    Route::get('/postulant', [RegisteredUserController::class, 'create']);   

    Route::get('/entrepreneur', [RegisteredUserController::class, 'create3'])->name('entrepreneur');   

    Route::post('/postulant', [RegisteredUserController::class, 'store']);

    Route::post('/prestataire', [RegisteredUserController::class, 'store1']);

    Route::post('/entreprise', [RegisteredUserController::class, 'store2']);

    Route::post('/entrepreneur', [RegisteredUserController::class, 'store3']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('entreprisedashboard', [dashboardController::class, 'entrepriseDashboard'])->middleware('dashboard');

    Route::get('prestatairedashboard', [dashboardController::class, 'prestataireDashboard']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');


    Route::get('entreprises', [adminMenuController::class, 'entreprise'])->name('entreprise')->middleware('dashboard');
    Route::get('prestataires', [adminMenuController::class, 'prestataire'])->middleware('dashboard');
    Route::get('postulants', [adminMenuController::class, 'postulant'])->middleware('dashboard');      
    Route::get('entrepreneurs', [adminMenuController::class, 'entrepreneur'])->middleware('dashboard');   
    Route::get('profile', [adminMenuController::class, 'profile'])->middleware('dashboard'); 


    Route::get('entreprises', [searchController::class, 'entreprise'])->name('entreprise')->middleware('dashboard');
    Route::get('prestataires', [searchController::class, 'prestataire'])->middleware('dashboard');
    Route::get('postulants', [searchController::class, 'postulant'])->middleware('dashboard');      
    Route::get('entrepreneurs', [searchController::class, 'entrepreneur'])->middleware('dashboard');   
    Route::get('profile', [searchController::class, 'profile'])->middleware('dashboard'); 


    
        
});

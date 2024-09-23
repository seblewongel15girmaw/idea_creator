<?php

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\IdeaCreator\IdeaCreatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserAuthController::class, 'login'])->name('login_post');
// forgot password 
Route::get('/forgot-password', [UserAuthController::class, 'showForgotPasswordForm'])->name('forgot_password');
Route::post('/forgot-password', [UserAuthController::class, 'sendGeneratedEmail'])->name('send_reset_link');
Route::get('/register', [IdeaCreatorController::class, 'create'])->name('idea_creators.create');
Route::post('/register', [IdeaCreatorController::class, 'store'])->name('idea_creators.store');
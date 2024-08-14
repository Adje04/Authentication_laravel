<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RouteViewController;
use Illuminate\Support\Facades\Route;


// les routes d'accès au formulaires de connexion
Route::get('/', [RouteViewController::class, 'loginView'])->name('login');
Route::get('/login', [RouteViewController::class, 'loginView'])->name('login');


// les routes d'accès au formulaires d'inscription
Route::get('/registration', [RouteViewController::class, 'registrationView'])->name('registration');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// les routes pour le traitement des données des  formulaires d'authentification
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');


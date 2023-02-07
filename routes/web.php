<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LogoutController;
use App\Models\Company;
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

Route::get('/pymeshield', function () {
    return view('layouts/user');
})->middleware('auth');

Route::get('/editar_perfil', function () {
    return view('perfilPersonal/editarperfil');
})->middleware('auth');

Route::get('/llistatEmpreses', [CompanyController::class, 'index'])->middleware('auth');

Route::get('/', [AuthController::class, 'index'])->name('index');

Route::get('/lost-password', [AuthController::class, 'rememberPassword'])->name('rememberPassword');

Route::get('/activate-user', [AuthController::class, 'activateUser'])->name('activateUser');

Route::post('/', [AuthController::class, 'login'])->name('login'); #test

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('llistatEmpreses/listCompanies', [CompanyController::class, 'listCompanies'])->middleware('auth');

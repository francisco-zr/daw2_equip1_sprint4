<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
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
    return view('layouts/user');
});

Route::get('/editar_perfil', function () {
    return view('perfilPersonal.editarperfil');
});

Route::get('/llistatEmpreses', [CompanyController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('index');

Route::post('/login', [AuthController::class, 'login'])->name('login');

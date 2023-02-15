<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RulesController;
use App\Models\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/home', function () {
    return view('layouts/user');
})->middleware('auth');



Route::get('/llistatEmpreses', [CompanyController::class, 'index'])->middleware('auth');

Route::get('/', [AuthController::class, 'index'])->name('index')->middleware('guest');

Route::get('/lost-password', [AuthController::class, 'rememberPassword'])->middleware('guest')->name('rememberPassword');

Route::post('/lost-password', [AuthController::class, 'rememberSend'])->name('rememberSend');

Route::get('/userList', [UserController::class, 'userList'])->name('userList');

Route::get('userList/userListing', [UserController::class, 'userListing'])->middleware('auth');

Route::get('/reset-password/{token}', [AuthController::class, 'activateUser'])->middleware('guest')->name('password.reset');

Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.store');

Route::post('/', [AuthController::class, 'login'])->middleware('guest')->name('login'); #test

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('listadoEmpresas/listCompanies', [CompanyController::class, 'listCompanies'])->middleware('auth');
Route::post('listadoEmpresas/createCompany', [CompanyController:: class, 'storeCompany'])->middleware('auth');
Route::post('listadoEmpresas/editCompany', [CompanyController:: class, 'editCompany'])->middleware('auth');
Route::post('listadoEmpresas/unsuscribeCompany', [CompanyController:: class, 'unsuscribeCompany'])->middleware('auth');

Route::get('/Perfil_Personal', [UserController::class, 'users'])->name('Perfil-Personal')->middleware('auth');

Route::get('/Perfil_Personal/Editar_Perfil', [UserController::class, 'editarUsuario'])->name('Editar-Perfil')->middleware('auth');
Route::patch('/Perfil_Personal/Editar_Perfil', [UserController::class, 'updateProfile'])->name('profile.update');


Route::get('/privacy_policy', [RulesController::class, 'indexPrivacy'])->name('index.privacy')->middleware('auth');
Route::get('/cookies_policy', [RulesController::class, 'indexCookies'])->name('index.cookies')->middleware('auth');
Route::get('/terms', [RulesController::class, 'indexTerms'])->name('index.terms')->middleware('auth');
Route::get('/edit_terms', [RulesController::class, 'indexEditTerms'])->name('edit.terms')->middleware('auth');
Route::post('/edit_terms', [RulesController::class, 'storeTerms'])->name('store.terms')->middleware('auth');
Route::get('/edit_terms/get', [RulesController::class, 'listTerms'])->name('list.terms')->middleware('auth');

Route::get('/edit_cookies', [RulesController::class, 'indexEditCookies'])->name('edit.cookies')->middleware('auth');
Route::post('/edit_cookies', [RulesController::class, 'storeCookies'])->name('store.cookies')->middleware('auth');
Route::get('/edit_cookies/get', [RulesController::class, 'listCookies'])->name('list.cookies')->middleware('auth');

Route::get('/edit_privacy', [RulesController::class, 'indexEditPrivacy'])->name('edit.privacy')->middleware('auth');
Route::post('/edit_privacy', [RulesController::class, 'storePrivacy'])->name('store.privacy')->middleware('auth');
Route::get('/edit_privacy/get', [RulesController::class, 'listPrivacy'])->name('list.privacy')->middleware('auth');

Route::get('/admin', function () {
    return view('layouts/admin');
})->middleware('auth');

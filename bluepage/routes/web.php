<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\CreateCompany;

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

Route::get('/',[UserAuthController::class,'login'])->name('login');
Route::get('/register',[UserAuthController::class,'register'])->name('register');
Route::post('create',[UserAuthController::class,'create'])->name('auth.create');
Route::post('check',[UserAuthController::class,'check'])->name('auth.check');

Route::get('entreprises',[UserAuthController::class,'entreprises']);
Route::get('entreprise/create',[CreateCompany::class,'index'])->name('create_company');
Route::post('create_company',[CreateCompany::class,'create'])->name('create_new_company');
Route::get('/entreprise/{id}',[CreateCompany::class,'company_details'])->name('company_details');

Route::get('/entreprise/updadte/{id}',[CreateCompany::class,'update'])->name('update_company');
//Route::post('/entreprise/updadte/{id}',[CreateCompany::class,'update'])->name('update_company');

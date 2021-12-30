<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\CompanyController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::get('company',[CompanyController::class,'index'])->name('company');
    Route::get('add_company',[CompanyController::class,'add'])->name('add_company');
    Route::post('company_store',[CompanyController::class,'store'])->name('company_store');
    Route::get('edit_company/{id}',[CompanyController::class,'edit'])->name('edit_company');
    Route::post('company_update',[CompanyController::class,'update'])->name('company_update');

});

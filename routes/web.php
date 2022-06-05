<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
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

Route::get('/admin/login', function () {
    return view('backend.home');
});


Route::get('/admin/pages/home-page',[DashboardController::class,'homePages'])->name('admin.home-pages');
Route::post('/admin/pages/saveBanner/{id?}',[DashboardController::class,'saveBanner'])->name('save.admin.home-pages');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');


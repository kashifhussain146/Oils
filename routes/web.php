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




Route::get('/admin/pages/home-page',[DashboardController::class,'homeBanner'])->name('admin.home-pages');
Route::post('/admin/pages/saveBanner/{id?}',[DashboardController::class,'saveBanner'])->name('save.admin.home-pages');
Route::post('/admin/pages/saveProjects/{id?}',[DashboardController::class,'saveProjects'])->name('save.admin.projects-pages');
Route::post('/admin/pages/saveSectors/{id?}',[DashboardController::class,'saveSectors'])->name('save.admin.sectors-pages');



Route::get('/admin/pages', 'App\Http\Controllers\CommonController@pageIndex')->name('pages.index');
Route::get('/admin/pages/create', 'App\Http\Controllers\CommonController@pageCreate')->name('pages.create');
Route::get('/admin/pages/delete/{id}', 'App\Http\Controllers\CommonController@pageDestroy')->name('pages.destroy');
Route::post('/admin/pages/store', 'App\Http\Controllers\CommonController@pageStore')->name('pages.store');
Route::get('/admin/pages/edit/{id}', 'App\Http\Controllers\CommonController@pageEdit')->name('pages.edit');
Route::post('/admin/pages/update', 'App\Http\Controllers\CommonController@pageUpdate')->name('pages.update');
Route::get('/admin/pages/active', 'App\Http\Controllers\CommonController@pageActive')->name('pages.active');
Route::get('/admin/pages/content/{id}', 'App\Http\Controllers\CommonController@contentIndex')->name('pages.content.index');
Route::get('/admin/pages/content/create/{id}', 'App\Http\Controllers\CommonController@contentCreate')->name('pages.content.create');
Route::post('/admin/pages/content/store', 'App\Http\Controllers\CommonController@contentStore')->name('pages.content.store');
Route::get('/admin/pages/content/active', 'App\Http\Controllers\CommonController@contentActive')->name('pages.content.active');
Route::get('/admin/pages/content/edit/{id}', 'App\Http\Controllers\CommonController@contentEdit')->name('pages.content.edit');
Route::post('/admin/pages/content/update', 'App\Http\Controllers\CommonController@contentUpdate')->name('pages.content.update');
Route::get('/admin/pages/content/delete/{id}', 'App\Http\Controllers\CommonController@contentDestroy')->name('pages.content.destroy');



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{page_slug}/{content_slug}',[App\Http\Controllers\HomeController::class, 'pageDetails'])->name('page.details');
Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us',[App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact.us');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/',[PortfolioController::class, 'index']);
Route::get('/web',[HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth.guest'],function () {
Route::get('/admin',[AuthController::class, 'index']);
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/contact',[HomeController::class, 'contact'])->name('contact');

Route::get('/link', [HomeController::class, 'link'])->name('link');

});


Route::group(['middleware' => 'auth.admin'],function () {
    Route::get('/logout',[AuthController::class, 'logout']);
    Route::get('/dashboard',[AdminController::class, 'index']);
    Route::get('/contacts',[AdminController::class, 'contact'])->name('contactList');
    Route::get('/getLink',[AdminController::class, 'getLink'])->name('getLink');
    
});

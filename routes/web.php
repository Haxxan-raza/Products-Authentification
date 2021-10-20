<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as AdminHomeController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('data', [App\Http\Controllers\HomeController::class, 'show'])->name('data');

Route::group(['prefix' => 'admin',  'middleware' => ['auth']], function () {
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('admin_dashboard'); 

});
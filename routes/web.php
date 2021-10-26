<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\TestProjectController;
use App\Http\Controllers\admin\SubAdmins;
use App\Http\Controllers\admin\Products;
use App\Models\User;
use App\Models\Product;
use App\Facades\TestFacade;


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

Route::group(['prefix' => 'admin',  'middleware' => ['auth']], function () {
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('admin_dashboard'); 
    //testForm
    Route::get('categories', [TestProjectController::class, 'showCate']); 
    Route::get('testview', [TestProjectController::class, 'index'])->name('admin'); 
    Route::post('testview.store',[TestProjectController::class,'store']);
    Route::get('showrecord',[TestProjectController::class,'showrecord']);
    Route::get('editrecord/{id}',[TestProjectController::class,'editRecord']);
    Route::post('edit',[TestProjectController::class,'updateForm']);

    //subAdmins
    Route::resource('subadmins', SubAdmins::class);
    Route::resource('products', Products::class)->name('admin.product');

    
});

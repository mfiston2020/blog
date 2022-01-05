<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CategoriesController;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\all;

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

Route::get('/home',function(){
    return redirect('/admin');
});

Route::prefix('/admin')->middleware('auth')->name('admin.')->group(function(){
    
    Route::get('/',function(){return view('admin.dashboard');});

    Route::get('/category',[CategoriesController::class,'index'])->name('category');
    Route::post('/category',[CategoriesController::class,'store'])->name('category.store');

    Route::get('/blog',[BlogsController::class,'index'])->name('blog');

});
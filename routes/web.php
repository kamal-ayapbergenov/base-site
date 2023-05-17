<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'details'])->name('details');

Route::get('/pages', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/pages/{slug}', [App\Http\Controllers\PagesController::class, 'details'])->name('details');





Route::get('plastic-surgery/eyelid-surgery', function(){
    return view('plastic-surgery/eyelid-surgery');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


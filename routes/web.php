<?php

use App\Http\Controllers\FrontpageController;
use Illuminate\Support\Facades\Route;

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

Route::controller(FrontpageController::class)->name('frontpages.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/teori', 'teori')->name('teori');
    Route::get('/penerapan', 'penerapan')->name('penerapan');
    Route::get('/langkah', 'langkah')->name('langkah');
    Route::get('/studi-kasus', 'studiKasus')->name('studi-kasus');
    Route::get('/lainnya', 'lainnya')->name('lainnya');
});
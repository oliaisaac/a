<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ImageController;

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

Route::get('/', [PageController::class, 'getMainPage'])->name('main');
Route::get('/admin', [PageController::class, 'getAdminPage'])->name('admin');
Route::post('/auth', [PageController::class, 'auth'])->name('auth');
Route::post('/changeBack', [ImageController::class, 'getBackgroundImageAttribute'])->name('changeBackground');


Route::middleware(['auth'])->group(function () {
    Route::get('/logOut', [PageController::class, 'logOut'])->name('logOut');
    Route::post('/edit/info', [ImageController::class, 'editInformation'])->name('edit');
    Route::post('/edit/photo', [ImageController::class, 'photoUpload'])->name('photoUpload');
});

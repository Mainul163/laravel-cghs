<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CghsController;
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
Route::get('/cghs', [App\Http\Controllers\admin\CghsController::class, 'index'])->name('cghs');
Route::post('/cghs/store', [App\Http\Controllers\admin\CghsController::class, 'store'])->name('graduatedInfo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','role:user'])->name('dashboard');

require __DIR__.'/auth.php';
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

// ホーム画面表示
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('items')->group(function () {
    Route::get('/', [App\Http\Controllers\ItemController::class, 'index'])->name('index');
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::post('/', [App\Http\Controllers\ItemController::class, 'create']);
    // Route::get('/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']);
    // Route::post('/update/{id}', [App\Http\Controllers\ItemController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [App\Http\Controllers\ItemController::class, 'destroy'])->name('destroy');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// ログイン後の画面
Route::group(['middleware' => ['auth']], function () {

    // TOPページ
    Route::get('/', [TodoListController::class, 'index'])->name('index');
    Route::post('/', [TodoListController::class, 'index']);

    Route::get('add', [TodoListController::class, 'add'])->name('add');
    Route::post('add', [TodoListController::class, 'addStore']);
    Route::get('edit/{id}', [TodoListController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
    Route::post('edit/{id}', [TodoListController::class, 'editStore']);
    Route::get('delete/{id?}', [TodoListController::class, 'delete'])->name('delete');

});

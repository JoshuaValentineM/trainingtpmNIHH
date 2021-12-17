<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\katalogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [BookController::class, 'getCreatePage'])->name('getCreatePage');

Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');

Route::get('get-books', [BookController::class, 'getBooks'])->name('getBooks');

Route::get('/update-book/{id}', [BookController::class, 'getBookById']) ->name('getBookById');

Route::patch('/update-book/{id}', [BookController::class, 'updateBook'])->name('updateBook');

Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('delete');

Route::get('/createkatalog', [katalogController::class, 'getKatalog'])->name('getKatalog');

Route::post('/create-katalog', [katalogController::class, 'createKatalog'])->name('createKatalog');

Route::get('get-katalogs', [katalogController::class, 'getKatalogs'])->name('getKatalogs');

Route::get('/update-katalog/{id}', [katalogController::class, 'getKatalogById']) ->name('getKatalogById');

Route::patch('/update-katalog/{id}', [katalogController::class, 'updateKatalog'])->name('updateKatalog');

Route::delete('/delete-katalog/{id}', [katalogController::class, 'deleteKatalog'])->name('deleteKatalog');

Route::get('hello', function(){
    echo('Hello World');
});

<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//     return view('pages.homepage');
// });

Route::get('/', [BookController::class, 'index'])->name('homepage');
Route::get('/books/{book}', [BookController::class, 'show'])->name('book.show');
Route::get('/books/genre/{genre}', [BookController::class, 'showGenre'])->name('genre.show');
Route::get('/book-list', [BookController::class, 'bookList'])->name('book.list');

Route::middleware('auth')->group(function () {
Route::get('/add-book', [BookController::class, 'addBook'])->name('book.add');
Route::get('/add-article', [BookController::class, 'addArticle'])->name('article.add');
Route::post('/books', [BookController::class, 'storeBook'])->name('book.store');
});

Route::get('/try', function() {
    return view('pages.try');
});

Auth::routes();

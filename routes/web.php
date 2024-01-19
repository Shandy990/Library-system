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
    Route::post('/books', [BookController::class, 'storeBook'])->name('book.store');
    Route::post('/books-borrowed/{book}', [BookController::class, 'borrowed'])->name('book.borrowed');
    Route::get('/books-user-borrowed', [BookController::class, 'userBookBorrowed'])->name('book.user.borrowed');
    Route::post('/books-returned/{book}', [BookController::class, 'returned'])->name('book.returned');
    Route::get('/about-us', [BookController::class, 'aboutUs'])->name('about.us');
});

Route::middleware('can:is_admin,post')->group(function () {
    Route::get('/add-book', [BookController::class, 'addBook'])->name('book.add');
    Route::get('/add-article', [BookController::class, 'addArticle'])->name('article.add');
    Route::get('/book-control', [BookController::class, 'bookControl'])->name('book.control');
    Route::get('/book-control/edit/{book}', [BookController::class, 'bookEdit'])->name('book.edit');
    Route::post('/book-control/edit/{book}', [BookController::class, 'bookEditUpdate'])->name('book.edit.update');
    Route::post('/book-delete/{book}', [BookController::class, 'deleteBook'])->name('book.delete');
    Route::post('/deleted-books/{book}', [BookController::class, 'destroyBook'])->name('book.destroy');
    Route::get('/deleted-books', [BookController::class, 'deletedBooksCollection'])->name('book.deleted');
});

Route::get('/try', function () {
    return view('pages.try');
});

Auth::routes();

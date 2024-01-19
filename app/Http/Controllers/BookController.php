<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Cover;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(Book $book)
    {
        $newCommingBook = Book::orderBy('created_at', 'desc')->limit(8)->with('cover')->get();
        $bookCollection = Book::all();
        return view('pages.homepage', compact('newCommingBook', 'bookCollection'));
    }

    public function addBook()
    {
        $genres = Genre::all();
        return view('pages.addBook', compact('genres'));
    }

    public function storeBook(BookRequest $request)
    {
        $bookData = $request->only('title', 'publish_date', 'author', 'description');
        $book = Book::create($bookData);
        $book->genres()->sync($request->genres);

        $fileName = $book->title;

        if ($request->hasFile('cover')) {
            $cover = new Cover();
            $cover->folder = "public/covers";
            $cover->file = $request->cover;
            $cover->saveFile($fileName);
            $cover->book_id = $book->id;
            $cover->book_title = $book->title;
            $cover->path = $cover->getFilePath();
            $cover->save();
        }

        return redirect()->route('homepage');
    }

    public function addArticle()
    {
        return view('pages.addArticle');
    }

    public function show(Book $book)
    {
        $book->load('cover');
        $genres = $book->genres;
        $date = now()->addDays(5);
        $date = $date->format('F d, Y');
        return view('pages.showDetail', compact('book', 'genres', 'date'));
    }

    public function bookList()
    {
        $collection = Book::with('cover')->latest()->when(request()->search, function ($query) {
            // dd("test");
            $search = request()->search;
            $query->where('title', 'like', "%{$search}%");
        })->paginate(8);
        return view('pages.bookCollection', compact('collection'));
    }

    public function showGenre($genre)
    {
        $genreCollection = Book::when($genre, function ($query) use ($genre) {
            $query->whereHas('genres', function ($query) use ($genre) {
                $query->where('genre', $genre);
            });
        })->with('genres')->get();

        return view('pages.genreShow', compact('genreCollection'));
    }

    public function borrowed(Book $book)
    {
        $user_borrowed = request()->user()->id;
        $book->update([
            'status' => 'borrowed',
            'user_id' => $user_borrowed,
            'returned_at' => now()->addDays(5)
        ]);

        return redirect()->back();
    }

    public function userBookBorrowed(Book $book)
    {
        $userBorrowedBook = request()->user()->bookBorrowed()->paginate(10);
        return view('pages.userBookBorrowed', compact('userBorrowedBook'));
    }

    public function returned(Book $book)
    {
        $book->update([
            'status' => "available",
            'user_id' => null,
            'returned_at' => null,
        ]);
        return redirect()->back();
    }

    public function bookControl(Book $book)
    {
        $collection = Book::with('cover')->latest()->paginate(8);
        return view('pages.bookControlPages', compact('collection'));
    }

    public function bookEdit(Book $book)
    {
        $book->load('cover');
        $genres = Genre::all();
        $bookGenre = $book->genres()->pluck('id')->toArray();
        return view('pages.bookEdit', compact('book', 'genres', 'bookGenre'));
    }

    public function bookEditUpdate(BookRequest $request, Book $book)
    {
        if ($request->user()?->is_admin) {
            $data = $request->all();
            $fileName  = $book->title;

            if ($request->hasFile('cover')) {
                $book->cover->deleteFile();

                $cover = $book->cover;
                $cover->folder = "public/covers";
                $cover->file = $request->cover;
                $cover->saveFile($fileName);
                $cover->book_title = $book->title;
                $cover->path = $cover->getFilePath();
                $cover->save();
            }
            $book->update($data);
            $book->genres()->sync($request->genres);
        }
        return redirect(route('book.control'));
    }

    public function deleteBook(Book $book)
    {
        $book->delete();
        return redirect()->back();
    }

    public function deletedBooksCollection(Book $book)
    {
        $deletedBook = $book->orderBy('deleted_at', 'desc')->onlyTrashed()
            ->paginate(12);
        return view('pages.deletedBook', compact('deletedBook'));
    }

    public function destroyBook($book)
    {
        $book = Book::withTrashed()->where('id', $book)->firstOrFail();
        $book->genres()->detach();
        $book->cover()->delete();
        $book->forceDelete();
        return redirect()->back();
    }

    public function aboutUs()
    {
        return view('pages.aboutUs');
    }
}

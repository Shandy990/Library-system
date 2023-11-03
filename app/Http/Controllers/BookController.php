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
        $date->format('Y.m.d');
        // dd($genres);
        return view('pages.showDetail', compact('book', 'genres'));
    }

    public function bookList ()
    {
        $collection = Book::with('cover')->latest()->paginate(8);
        return view('pages.bookCollection', compact('collection'));
    }

    public function showGenre ($genre)
    {
        $genreCollection = Book::when($genre, function($query) use($genre) {
            $query->whereHas('genres', function($query) use($genre) {
                $query->where('genre', $genre);
            });
        })->with('genres')->get();

        return view('pages.genreShow', compact('genreCollection'));
    }

    public function borrowed (Book $book) {
        $book->update(['status'=>'borrowed']);
    }
}

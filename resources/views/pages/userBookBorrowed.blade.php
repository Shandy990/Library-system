@extends('layouts.app')

@section('title', 'TimeBrary')

@section('content')

    <div class="book-collection container">
        <h1 class="book-collection__title text-center">Borrowed Book Collection</h1>

        <div class="row">
            @foreach ($userBorrowedBook as $book)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="book-collection__book-container">
                        <div class="book-collection__cover-container text-center">
                            <img src="{{ $book->cover?->getUrl() ?? 'http://via.placeholder.com/240x320' }}" alt=""
                                class="book-collection__cover">
                        </div>
                        <div class="book-collection__info-container">
                            <h2 class="book-collection__book-title" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="{{ $book->title }}">{{ $book->title }}
                            </h2>
                            <p class="book-collection__book-author">{{ $book->author }}</p>
                            <p class="book-collection__book-status">{{ $book->status }}</p>
                        </div>
                        <div class="book-collection__btn-container">
                            <form action="{{ route('book.returned', $book->id) }}" method="POST"
                                id="returned-{{ $book->id }}">
                                @csrf
                                <a onclick="document.getElementById('returned-{{ $book->id }}').submit()" class="btn book-collection__btn">Returned
                                    Book</a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- {{ $collection->links() }} --}}
        </div>
    </div>

@endsection

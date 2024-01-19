@extends('layouts.app')

@section('title', 'TimeBrary')

@section('content')
    <div class="book-collection container">
        <h1 class="book-collection__title text-center">Book Collection</h1>

        <div class="row">
            <div class="col-lg-9">

            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3 collection__search-group">
                    <span class="input-group-text book-collection__search-icon-container" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="book-collection__search-icon" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="m479.6 399.716l-81.084-81.084l-62.368-25.767A175.014 175.014 0 0 0 368 192c0-97.047-78.953-176-176-176S16 94.953 16 192s78.953 176 176 176a175.034 175.034 0 0 0 101.619-32.377l25.7 62.2l81.081 81.088a56 56 0 1 0 79.2-79.195ZM48 192c0-79.4 64.6-144 144-144s144 64.6 144 144s-64.6 144-144 144S48 271.4 48 192Zm408.971 264.284a24.028 24.028 0 0 1-33.942 0l-76.572-76.572l-23.894-57.835l57.837 23.894l76.573 76.572a24.028 24.028 0 0 1-.002 33.941Z" />
                        </svg>
                    </span>
                    <input type="text" class="form-control book-collection__search-input" placeholder="Search Book Title"
                        name="collection_search" id="collection_search">
                </div>
            </div>
            @foreach ($collection as $book)
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
                            <a href="{{ route('book.edit', $book->id) }}"class="btn book-collection__btn mb-2">Edit</a>
                            <form action="{{ route('book.delete', $book->id) }}" method="POST"
                                id="delete-{{ $book->id }}">
                                @csrf
                                <a onclick="document.getElementById('delete-{{ $book->id }}').submit()"
                                    class="btn book-collection__btn">Delete
                                    Book</a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $collection->links() }}
        </div>
    </div>
@endsection

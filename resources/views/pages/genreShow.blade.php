@extends('layouts.app')

@section('title', 'TimeBrary')

@section('content')
    <div class="genre-show container">
        <h1 class="show-genre__title text-center">Book Collection</h1>
        <div class="row">
            <div class="col-12 col-lg-9">

            </div>
            <div class="col-12 col-lg-3">
                <div class="input-group mb-3 show-genre__search-group">
                    <span class="input-group-text show-genre__search-icon-container" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="show-genre__search-icon" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="m479.6 399.716l-81.084-81.084l-62.368-25.767A175.014 175.014 0 0 0 368 192c0-97.047-78.953-176-176-176S16 94.953 16 192s78.953 176 176 176a175.034 175.034 0 0 0 101.619-32.377l25.7 62.2l81.081 81.088a56 56 0 1 0 79.2-79.195ZM48 192c0-79.4 64.6-144 144-144s144 64.6 144 144s-64.6 144-144 144S48 271.4 48 192Zm408.971 264.284a24.028 24.028 0 0 1-33.942 0l-76.572-76.572l-23.894-57.835l57.837 23.894l76.573 76.572a24.028 24.028 0 0 1-.002 33.941Z" />
                        </svg>
                    </span>
                    <input type="text" class="form-control show-genre__search-input" placeholder="Search Book Title"
                        name="collection_search" id="collection_search">
                </div>
            </div>
            @if ($genreCollection->isEmpty())
                <h2 class="show-genre__not-found">There is no data for this collection</h2>
            @else
                @foreach ($genreCollection as $book)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="show-genre__book-container">
                            <div class="show-genre__cover-container text-center">
                                <img src="{{ $book->cover?->getUrl() ?? 'http://via.placeholder.com/240x320' }}"
                                    alt="" class="show-genre__cover">
                            </div>
                            <div class="show-genre__info-container">
                                <h2 class="show-genre__book-title" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="{{ $book->title }}">{{ $book->title }}
                                </h2>
                                <p class="show-genre__book-author">{{ $book->author }}</p>
                                <p class="show-genre__book-status">{{ $book->status }}</p>
                            </div>
                            <div class="show-genre__btn-container">
                                <a href="{{ route('book.show', $book->id) }}" class="btn show-genre__btn">Book
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection

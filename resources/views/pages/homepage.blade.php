@extends('layouts.app')

@section('title', 'TimeBrary')

@section('content')
    <?php
    $jumbotron = [
        [
            'background' => 'assets/img/jumbo1.png',
        ],
        [
            'background' => 'assets/img/jumbo2.png',
        ],
        [
            'background' => 'assets/img/jumbo3.png',
        ],
    ];
    $genreList = [
        [
            'genre' => 'fantasy',
            'logo' => 'assets/img/fantasy.png',
            'background' => '#8EA7E9',
        ],
        [
            'genre' => 'advanture',
            'logo' => 'assets/img/advanture.png',
            'background' => '#7286D3',
        ],
        [
            'genre' => 'romance',
            'logo' => 'assets/img/romance.png',
            'background' => '#8EA7E9',
        ],
        [
            'genre' => 'horror',
            'logo' => 'assets/img/horror.png',
            'background' => '#7286D3',
        ],
        [
            'genre' => 'comedy',
            'logo' => 'assets/img/comedy.png',
            'background' => '#8EA7E9',
        ],
        [
            'genre' => 'angst',
            'logo' => 'assets/img/angst.png',
            'background' => '#7286D3',
        ],
        [
            'genre' => 'family',
            'logo' => 'assets/img/family.png',
            'background' => '#8EA7E9',
        ],
    
        [
            'genre' => 'mystery',
            'logo' => 'assets/img/mystery.png',
            'background' => '#7286D3',
        ],
        [
            'genre' => 'kingdom',
            'logo' => 'assets/img/kingdom.png',
            'background' => '#8EA7E9',
        ],
        [
            'genre' => 'action',
            'logo' => 'assets/img/action.png',
            'background' => '#7286D3',
        ],
        [
            'genre' => 'history',
            'logo' => 'assets/img/history.png',
            'background' => '#8EA7E9',
        ],
        [
            'genre' => 'education',
            'logo' => 'assets/img/education.png',
            'background' => '#7286D3',
        ],
        [
            'genre' => 'biography',
            'logo' => 'assets/img/biography.png',
            'background' => '#8EA7E9',
        ],
        [
            'genre' => 'food',
            'logo' => 'assets/img/food.png',
            'background' => '#7286D3',
        ],
    ];
    ?>
    <div class="swiper jumboSwiper">
        <div class="swiper-wrapper">
            @foreach ($jumbotron as $banner)
                <div class="swiper-slide">
                    <div class="jumbotron">
                        <img src="{{ asset($banner['background']) }}" alt="" class="jumbotron__img">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="jumbotron__pagination swiper-pagination"></div>
    </div>

    <div class="genre container">
        <h1 class="genre__title">Genre Collection</h1>
        <div class="swiper genreSwiper">
            <div class="swiper-wrapper">
                @foreach ($genreList as $genre)
                    <div class="swiper-slide">
                        <a class="genre__link" href="{{ route('genre.show', $genre['genre']) }}">
                            <div class="genre__image-container" style="background-color: {{ $genre['background'] }}">
                                <img src="{{ asset($genre['logo']) }}" alt="" class="genre__image">
                            </div>
                            <div class="genre__title-contaier text-center">
                                <h2 class="genre__title-genre">{{ $genre['genre'] }}</h2>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="genre__prev genre__nav-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20">
                <path fill="currentColor" d="m4 10l9 9l1.4-1.5L7 10l7.4-7.5L13 1z" />
            </svg>
        </div>
        <div class="genre__next genre__nav-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20">
                <path fill="currentColor" d="M7 1L5.6 2.5L13 10l-7.4 7.5L7 19l9-9z" />
            </svg>
        </div>
    </div>

    <div class="new-comming">
        <div class="container">
            <h1 class="new-comming__title">
                New Comming Book!
            </h1>
            <div class="swiper new-comming-swiper">
                <div class="swiper-wrapper">
                    @foreach ($newCommingBook as $new)
                        <div class="swiper-slide">
                            <div class="new-comming__item-container">
                                <div class="new-comming__image-container text-center">
                                    <img src="{{ $new->cover?->getUrl() ?? 'http://via.placeholder.com/240x320' }}"
                                        alt="" class="new-comming__image">
                                </div>
                                <div class="new-comming__info-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="new-comming__ribbon" viewBox="0 0 36 36">
                                        <path fill="currentColor"
                                            d="m34.11 24.49l-3.92-6.62l3.88-6.35a1 1 0 0 0-.85-1.52H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h31.25a1 1 0 0 0 .86-1.51Zm-23.6-3.31H9.39l-3.26-4.34v4.35H5V15h1.13l3.27 4.35V15h1.12ZM16.84 16h-3.53v1.49h3.2v1h-3.2v1.61h3.53v1h-4.66V15h4.65Zm8.29 5.16H24l-1.55-4.59l-1.55 4.61h-1.12l-2-6.18H19l1.32 4.43L21.84 15h1.22l1.46 4.43L25.85 15h1.23Z"
                                            class="clr-i-solid clr-i-solid-path-1" />
                                        <path fill="none" d="M0 0h36v36H0z" />
                                    </svg>
                                    <h2 class="new-comming__book-title" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="{{ $new->title }}">{{ $new->title }}
                                    </h2>
                                    <p class="new-comming__book-author">{{ $new->author }}</p>
                                    <p class="new-comming__book-status">{{ $new->status }}</p>
                                </div>
                                <div class="new-coming__btn-container">
                                    <a href="{{ route('book.show', $new->id) }}" class="btn new-comming__btn">Book
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="new-comming__prev new-comming__nav-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20">
                    <path fill="currentColor" d="m4 10l9 9l1.4-1.5L7 10l7.4-7.5L13 1z" />
                </svg>
            </div>
            <div class="new-comming__next new-comming__nav-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20">
                    <path fill="currentColor" d="M7 1L5.6 2.5L13 10l-7.4 7.5L7 19l9-9z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="book-list container">
        <div class="book-list__title-container">
            <div class="row book-list__header">
                <div class="book-list__title-container col-6">
                    <h2 class="book-list__title">Book List</h2>
                </div>
                <div class="book-list__more-container col-6 text-end">
                    <a href="{{ route('book.list') }}" class="book-list__link-more">
                        See More
                        <svg xmlns="http://www.w3.org/2000/svg" class="book-list__link-arrow" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor"
                                d="M16 5c0 .742.733 1.85 1.475 2.78c.954 1.2 2.094 2.247 3.401 3.046C21.856 11.425 23.044 12 24 12m0 0c-.956 0-2.145.575-3.124 1.174c-1.307.8-2.447 1.847-3.401 3.045C16.733 17.15 16 18.26 16 19m8-7H0" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach ($bookCollection->slice(0, 12) as $book)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="book-list__book-container">
                            <div class="book-list__image-container text-center">
                                <img src="{{ $book->cover?->getUrl() ?? 'http://via.placeholder.com/240x320' }}"
                                    alt="" class="book-list__image">
                            </div>
                            <div class="book-list__info-container">
                                <h2 class="book-list__book-title" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="{{ $book->title }}">{{ $book->title }}
                                </h2>
                                <p class="book-list__book-author">{{ $book->author }}</p>
                                <p class="book-list__book-status">{{ $book->status }}</p>
                            </div>
                            <div class="book-list__btn-container">
                                <a href="{{ route('book.show', $book->id) }}" class="btn book-list__btn">Book
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

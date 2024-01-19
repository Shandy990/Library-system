@extends('layouts.app')

@section('title', 'TimeBrary')

@section('content')
    <div class="book-detail container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('homepage') }}" class="book-detail__back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="book-detail__back-arrow" viewBox="0 0 16 16">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    Back To Homepage
                </a>
            </div>
        </div>
        <div class="card book-detail__card">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="book-detail__cover-container">
                        <img src="{{ $book->cover?->getUrl() ?? 'http://via.placeholder.com/280x380' }}" alt=""
                            class="book-detail__cover">
                    </div>
                    <div class="book-detail__btn-container">
                        <button class="btn book-detail__btn" data-bs-toggle="modal"
                            data-bs-target="@if($book->status == "available") #borrowModal @else #alertModal @endif">Borrow</button>
                    </div>
                    {{-- <div class="book-detail__btn-container">
                        <button class="btn book-detail__btn">Edit</button>
                    </div> --}}
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 book-detail__book-info">
                            <div class="book-detail__item-container">
                                <div class="book-detail__title-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="book-detail__title-icon"
                                        viewBox="0 0 32 32">
                                        <path fill="currentColor"
                                            d="M4 9.5V9a1.5 1.5 0 0 1 1.5-1.5h8c1.043 0 1.963.533 2.5 1.341A2.997 2.997 0 0 1 18.5 7.5h8A1.5 1.5 0 0 1 28 9v.5h.499c1.105 0 2.001.89 2.001 1.995v16l-.001.067v.933c0 .827-.67 1.505-1.501 1.505H17.732a1.999 1.999 0 0 1-3.464 0H3c-.83 0-1.501-.668-1.501-1.495v-17.01c0-1.105.896-1.995 2.001-1.995H4Zm1.5-1A.5.5 0 0 0 5 9v15a.5.5 0 0 0 .5.5h8.264a2.5 2.5 0 0 1 1.736.701V10.5a2 2 0 0 0-2-2h-8Zm11 2v14.701a2.5 2.5 0 0 1 1.736-.701H26.5a.5.5 0 0 0 .5-.5V9a.5.5 0 0 0-.5-.5h-8a2 2 0 0 0-2 2Zm-.498 15.378h-.004l.002.004l.002-.004ZM3.322 10.516a.995.995 0 0 0-.822.98v16.009c0 .55.445.995 1.001.995h11.055l.144.25a1.5 1.5 0 0 0 2.6 0l.144-.25h11.055c.552 0 1.001-.451 1.001-1.005v-16a.995.995 0 0 0-.823-.98L29 11v14.5a1.5 1.5 0 0 1-1.5 1.5H16.559L16 28.118L15.441 27H4.5A1.5 1.5 0 0 1 3 25.5V11l.323-.484Z" />
                                    </svg>
                                    <p class="book-detail__title">Book Title</p>
                                </div>
                                <h2 class="book-detail__item">{{ $book->title }}</h2>
                            </div>
                            <div class="book-detail__item-container">
                                <div class="book-detail__title-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="book-detail__title-icon"
                                        viewBox="-0.5 -0.5 24 24">
                                        <path fill="currentColor"
                                            d="m21.289.98l.59.59c.813.814.69 2.257-.277 3.223L9.435 16.96l-3.942 1.442c-.495.182-.977-.054-1.075-.525a.928.928 0 0 1 .045-.51l1.47-3.976L18.066 1.257c.967-.966 2.41-1.09 3.223-.276zM8.904 2.19a1 1 0 1 1 0 2h-4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a1 1 0 0 1 2 0v4a4 4 0 0 1-4 4h-12a4 4 0 0 1-4-4v-12a4 4 0 0 1 4-4h4z" />
                                    </svg>
                                    <p class="book-detail__title">Author of the Book</p>
                                </div>
                                <h2 class="book-detail__item">{{ $book->author }}</h2>
                            </div>
                            <div class="book-detail__item-container">
                                <div class="book-detail__title-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="book-detail__title-icon"
                                        viewBox="0 0 36 36">
                                        <path fill="currentColor"
                                            d="M32.25 6h-4v3a2.2 2.2 0 1 1-4.4 0V6H12.2v3a2.2 2.2 0 0 1-4.4 0V6h-4A1.78 1.78 0 0 0 2 7.81v22.38A1.78 1.78 0 0 0 3.75 32h28.5A1.78 1.78 0 0 0 34 30.19V7.81A1.78 1.78 0 0 0 32.25 6ZM10 26H8v-2h2Zm0-5H8v-2h2Zm0-5H8v-2h2Zm6 10h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Zm6 10h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Zm6 10h-2v-2h2Zm0-5h-2v-2h2Zm0-5h-2v-2h2Z"
                                            class="clr-i-solid clr-i-solid-path-1" />
                                        <path fill="currentColor" d="M10 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"
                                            class="clr-i-solid clr-i-solid-path-2" />
                                        <path fill="currentColor" d="M26 10a1 1 0 0 0 1-1V3a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z"
                                            class="clr-i-solid clr-i-solid-path-3" />
                                        <path fill="none" d="M0 0h36v36H0z" />
                                    </svg>
                                    <p class="book-detail__title">Publish Date</p>
                                </div>
                                <h2 class="book-detail__item">{{ $book->publish_date }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 book-detail__book-info">
                            <div class="book-detail__item-container">
                                <div class="book-detail__title-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="book-detail__title-icon"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M15.493 6.935a.75.75 0 0 1 .072 1.058l-7.857 9a.75.75 0 0 1-1.13 0l-3.143-3.6a.75.75 0 0 1 1.13-.986l2.578 2.953l7.292-8.353a.75.75 0 0 1 1.058-.072Zm5.024.085c.3.285.312.76.026 1.06l-8.571 9a.75.75 0 0 1-1.14-.063l-.429-.563a.75.75 0 0 1 1.076-1.032l7.978-8.377a.75.75 0 0 1 1.06-.026Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <p class="book-detail__title">Book Status</p>
                                </div>
                                <h2 class="book-detail__item">{{ $book->status }}</h2>
                            </div>
                            <div class="book-detail__item-container">
                                <div class="book-detail__title-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="book-detail__title-icon"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M319.61 20.654c13.145 33.114 13.144 33.115-5.46 63.5c33.114-13.145 33.116-13.146 63.5 5.457c-13.145-33.114-13.146-33.113 5.457-63.498c-33.114 13.146-33.113 13.145-63.498-5.459zM113.024 38.021c-11.808 21.04-11.808 21.04-35.724 24.217c21.04 11.809 21.04 11.808 24.217 35.725c11.808-21.04 11.808-21.04 35.724-24.217c-21.04-11.808-21.04-11.808-24.217-35.725zm76.55 56.184c-.952 50.588-.95 50.588-41.991 80.18c50.587.95 50.588.95 80.18 41.99c.95-50.588.95-50.588 41.99-80.18c-50.588-.95-50.588-.95-80.18-41.99zm191.177 55.885c-.046 24.127-.048 24.125-19.377 38.564c24.127.047 24.127.046 38.566 19.375c.047-24.126.046-24.125 19.375-38.564c-24.126-.047-24.125-.046-38.564-19.375zm-184.086 83.88a96.38 96.38 0 0 0-3.492.134c-18.591 1.064-41.868 8.416-77.445 22.556L76.012 433.582c78.487-20.734 132.97-21.909 170.99-4.615V247.71c-18.076-8.813-31.79-13.399-46.707-13.737a91.166 91.166 0 0 0-3.629-.002zm122.686 11.42a209.3 209.3 0 0 0-8.514.098c-12.81.417-27.638 2.215-45.84 4.522v177.135c43.565-7.825 106.85-4.2 171.244 7.566l-39.78-177.197c-35.904-8.37-56.589-11.91-77.11-12.123zm2.289 16.95c18.889.204 36.852 2.768 53.707 5.02l4.437 16.523c-23.78-3.75-65.966-4.906-92.467-.98l-.636-17.805c11.959-2.154 23.625-2.88 34.959-2.758zm-250.483 4.658L60.54 313.002h24.094l10.326-46.004H71.158zm345.881 0l39.742 177.031l2.239 9.973l22.591-.152l-40.855-186.852h-23.717zm-78.857 57.82c16.993.026 33.67.791 49.146 2.223l3.524 17.174c-32.645-3.08-72.58-2.889-102.995 0l-.709-17.174c16.733-1.533 34.04-2.248 51.034-2.223zm-281.793 6.18l-6.924 30.004h24.394l6.735-30.004H56.389zm274.418 27.244c4.656.021 9.487.085 14.716.203l2.555 17.498c-19.97-.471-47.115.56-59.728 1.05l-.7-17.985c16.803-.493 29.189-.828 43.157-.766zm41.476.447c8.268.042 16.697.334 24.121.069l2.58 17.74c-8.653-.312-24.87-.83-32.064-.502l-2.807-17.234a257.25 257.25 0 0 1 8.17-.073zm-326.97 20.309l-17.985 77.928l25.035-.17l17.455-77.758H45.313zm303.164 11.848c19.608-.01 38.66.774 56.449 2.572l2.996 20.787c-34.305-4.244-85.755-7.697-119.1-3.244l-.14-17.922c20.02-1.379 40.186-2.183 59.795-2.193zm-166.606 44.05c-30.112.09-67.916 6.25-115.408 19.76l-7.22 2.053l187.759-1.27v-6.347c-16.236-9.206-37.42-14.278-65.13-14.196zm134.41 6.174c-19.63.067-37.112 1.439-51.283 4.182v10.064l177.594-1.203c-44.322-8.634-89.137-13.17-126.31-13.043zM26 475v18h460v-18H26z" />
                                    </svg>
                                    <p class="book-detail__title">Book Genres</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        @foreach ($genres as $genre)
                                            <h2 class="book-detail__item">{{ $genre->genre }}</h2>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 book-detail__book-info">
                            <div class="book-detail__title-container">
                                <svg xmlns="http://www.w3.org/2000/svg" class="book-detail__title-icon" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M9 4v1.38c-.83-.33-1.72-.5-2.61-.5c-1.79 0-3.58.68-4.95 2.05l3.33 3.33h1.11v1.11c.86.86 1.98 1.31 3.11 1.36V15H6v3c0 1.1.9 2 2 2h10c1.66 0 3-1.34 3-3V4H9zm-1.11 6.41V8.26H5.61L4.57 7.22a5.07 5.07 0 0 1 1.82-.34c1.34 0 2.59.52 3.54 1.46l1.41 1.41l-.2.2a2.7 2.7 0 0 1-1.92.8c-.47 0-.93-.12-1.33-.34zM19 17c0 .55-.45 1-1 1s-1-.45-1-1v-2h-6v-2.59c.57-.23 1.1-.57 1.56-1.03l.2-.2L15.59 14H17v-1.41l-6-5.97V6h8v11z" />
                                </svg>
                                <p class="book-detail__title">Book Description</p>
                            </div>
                            <a href="#" class="book-detail__description-link">
                                <div class="book-detail__book-description-container">
                                    <p class="book-detail__book-description">{{ $book->description }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Borrow Modal -->
        <div class="modal fade borrow-modal" id="borrowModal" tabindex="-1" aria-labelledby="borrowModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered borrow-modal__dialog">
                <div class="modal-content borrow-modal__content">
                    <form action="{{ route('book.borrowed', $book->id) }}" method="post">
                        @csrf
                        <div class="modal-header borrow-modal__header text-center" data-bs-theme="dark">
                            <h3 class="modal-title borrow-modal__title" id="exampleModalLabel">REMEMBER !</h3>
                            <button type="button" class="btn-close btn-close-light" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body borrow-modal__body">
                            <p class="borrow-modal__message">
                                Your loan deadline is <span class="borrow-modal__reminder">5 days</span>, you must return
                                the book on or before <span class="borrow-modal__reminder">{{ $date }}</span>
                            </p>
                        </div>
                        <div class="modal-footer borrow-modal__footer">
                            <button type="button" class="btn btn-secondary borrow-modal__close-btn"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary borrow-modal__borrow-btn">Borrow Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Alert Modal -->
        <div class="modal fade borrow-modal" id="alertModal" tabindex="-1" aria-labelledby="alertModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered borrow-modal__dialog">
                <div class="modal-content borrow-modal__content">
                    <div class="modal-header borrow-modal__header text-center" data-bs-theme="dark">
                        <h3 class="modal-title borrow-modal__title" id="exampleModalLabel">INFORMATION !</h3>
                        <button type="button" class="btn-close btn-close-light" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body borrow-modal__body">
                        <p class="borrow-modal__message text-center">
                            We are so sorry, the status of this book is currently being borrowed, please borrow it another time when the book is available, thank you!
                        </p>
                    </div>
                    <div class="modal-footer borrow-modal__footer">
                        <button type="button" class="btn btn-secondary borrow-modal__close-btn"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

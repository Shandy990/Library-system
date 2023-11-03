@extends('layouts.app')

@section('title', 'TimeBrary')

@section('content')
    <div class="add-book container">
        <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card add-book__card">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="add-book__page-title-container">
                            <h1 class="add-book__page-title">
                                Input Book Detail
                            </h1>
                        </div>
                        <div class="add-book__cover-container text-center">
                            <img src="http://via.placeholder.com/240x320" id="output" alt=""
                                class="add-book__cover">
                        </div>
                        <div class="add-book__upload-container text-center">
                            <input type="file" accept="image/*" onchange="loadFile(event)" name="cover"
                                id="add-book-cover" class="d-none image-input" data-target="#output">
                            <label for="add-book-cover" class="add-book__upload">Upload Cover</label>
                        </div>
                    </div>
                    <div class="col-lg-8 add-book__info-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="add-book__input-group">
                                    <label for="title" class="add-book__label">Title</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control add-book__input" value="{{ old('title') }}">
                                    @if ($errors->first('title'))
                                        <span class="text-danger">{{ $errors->first('title') }} !</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="add-book__input-group">

                                    <label for="publish_date" class="add-book__label">Publish Date</label>
                                    <input type="date" name="publish_date" id="publish_date"
                                        class="form-control add-book__input" value="{{ old('publish_date') }}">
                                    @if ($errors->first('publish_date'))
                                        <span class="text-danger">{{ $errors->first('publish_date') }} !</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="add-book__input-group">

                                    <label for="author" class="add-book__label">Author</label>
                                    <input type="text" name="author" id="author"
                                        class="form-control add-book__input" value="{{ old('author') }}">
                                    @if ($errors->first('author'))
                                        <span class="text-danger">{{ $errors->first('author') }} !</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="add-book__input-group">
                                    <label for="description" class="add-book__label">Description</label>
                                    <textarea name="description" id="description" rows="6" class="form-control add-book__text-area">{!! old('description') !!}</textarea>
                                    @if ($errors->first('description'))
                                        <span class="text-danger">{{ $errors->first('description') }} !</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="add-book__input-group">
                                    <label for="bookGenre" class="add-book__label">Genre</label>
                                    <div class="row">
                                        @foreach ($genres as $genre)
                                            @php
                                                $isChecked = in_array($genre->id, old('genres') ?? []);
                                            @endphp
                                            <div class="col-lg-6">
                                                <div class="form-check">
                                                    <input class="form-check-input add-book__genre-input" type="checkbox"
                                                        value="{{ $genre->id }}" id="flexCheckDefault" name="genres[]" @if($isChecked) checked @endif>
                                                    <label class="form-check-label add-book__genre-name"
                                                        for="flexCheckDefault">
                                                        {{ $genre->genre }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if ($errors->first('genre'))
                                            <span class="text-danger">{{ $errors->first('genre') }} !</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="add-book__sub-btn-container">
                                    <button type="submit" class="btn add-book__sub-btn">Upload Book</button>
                                    <a href="{{ route('homepage') }}" type="button" class="btn add-book__cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{-- <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script> --}}
@endsection

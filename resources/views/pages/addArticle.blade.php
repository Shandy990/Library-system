@extends('layouts.app')

@section('title', 'TimeBrary')

@section('content')
    <div class="add-article container">
        <div class="card add-article__card">
            <div class="row">
                <div class="col-lg-5 text-center">
                    <div class="add-article__cover-container">
                        <img src="http://via.placeholder.com/380x250" alt="">
                    </div>
                    <div class="add-article__upload-container">
                        <input type="file" name="add-article-cover" id="addArticleCover" class="add-article__upload">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="add-article__input-group">
                        <label for="articleTitle" class="add-article__label">Title</label>
                        <input type="text" name="articleTitle" id="articleTitle" class="form-control add-article__input">
                    </div>
                    <div class="add-article__input-group">
                        <label for="articleText" class="add-article__label">Input Article</label>
                        <textarea name="articleText" id="articletext" rows="6" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

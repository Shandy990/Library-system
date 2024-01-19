@extends('layouts.app')

@section('title', 'TimeBrary')

@section('content')
    <div class="about-us">
        <div class="about-us__container container">
            <div class="row about-us__row">
                <div class="col-5 about-us__col">
                    <div class="about-us__img-container">
                        <img src="{{ asset('assets/img/about-us-1.jpg') }}" alt="" class="about-us__img">
                        <img src="{{ asset('assets/img/about-us-3.jpeg') }}" alt="" class="about-us__img--3">
                        <img src="{{ asset('assets/img/about-us-2.jpg') }}" alt="" class="about-us__img--2">
                    </div>
                </div>
                <div class="col-7 about-us__col">
                    <div class="about-us__text-container">
                        <div class="about-us__title-container">
                            <h1 class="about-us__title">
                                About Us
                            </h1>
                        </div>
                        <div class="about-us__desc-container">
                            <p class="about-us__desc">
                                Selamat datang di Perpustakaan Timebrary, destinasi literasi eksklusif di Bali
                                yang telah menginspirasi para pecinta buku selama lebih dari 12 tahun. Didirikan pada tahun
                                2018 oleh seorang pengusaha Jepang, perpustakaan kami berkomitmen untuk
                                menyajikan keberagaman penulis dan wawasan. Dengan lokasi yang memikat di Bali, kami
                                menawarkan pengalaman membaca yang unik di tengah keindahan alam dan budaya pulau ini.
                                Teruslah menemukan dunia fantastis di rak-rak buku kami, di mana setiap karya adalah jendela
                                ke pengetahuan dan petualangan. Terima kasih telah menjadi bagian dari perjalanan literasi
                                kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'TimeBrary')

@section('content')
    <div class="about-us">
        <div class="about-us__container container">
            <div class="row about-us__row">
                <div class="col-12 col-lg-5 about-us__col">
                    <div class="about-us__img-container">
                        <img src="{{ asset('assets/img/about-us-1.jpg') }}" alt="" class="about-us__img">
                        <img src="{{ asset('assets/img/about-us-3.jpeg') }}" alt="" class="about-us__img--3">
                        <img src="{{ asset('assets/img/about-us-2.jpg') }}" alt="" class="about-us__img--2">
                    </div>
                </div>
                <div class="col-12 col-lg-7 about-us__col--right">
                    <div class="about-us__text-container">
                        <div class="about-us__title-container">
                            <h1 class="about-us__title">
                                About Us
                            </h1>
                        </div>
                        <div class="about-us__desc-container">
                            <p class="about-us__desc">
                                Selamat datang di Perpustakaan SMK TI Bali Global Denpasar! Sejak didirikan pada tahun 2007,
                                perpustakaan kami telah menjadi pusat pembelajaran yang menyediakan akses ke berbagai
                                literatur dan sumber daya edukatif berkualitas. Kami berkomitmen untuk mendukung
                                pengembangan literasi informasi dan keterampilan riset siswa melalui koleksi buku, e-book,
                                jurnal, dan database akademik yang terus berkembang. Dengan fasilitas modern seperti ruang
                                baca yang nyaman, akses komputer dengan internet cepat, dan ruang diskusi, kami menciptakan
                                lingkungan belajar yang inspiratif dan kondusif. Tim pustakawan kami siap membantu Anda
                                dalam pencarian informasi dan bahan bacaan yang dibutuhkan. Kami berharap dapat menjadi
                                bagian penting dalam perjalanan belajar Anda di SMK TI Bali Global Denpasar!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

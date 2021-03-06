@extends('template.main')

@section('custom-css')
@endsection

@section('custom-js')
@endsection

@section('content')
    <div class="main">
        <div class="home-slider owl-carousel polaroid-effect">
            <div class="item">
                <img class="owl-lazy" data-src="{{ asset('assets/image/animal.jpg') }}" alt="">
                <em>Animal AR</em>
            </div>
            <div class="item">
                <img class="owl-lazy" data-src="{{ asset('assets/image/animal.jpg') }}" alt="">
                <em>Animal AR</em>
            </div>
            <div class="item">
                <img class="owl-lazy" data-src="{{ asset('assets/image/animal.jpg') }}" alt="">
                <em>Animal AR</em>
            </div>
        </div>

        <h5 class="home-intro">
           SELAMAT DATANG DI APLIKASI EDUKASI HEWAN
        </h5>

        <div class="decoration"></div>
{{--
        <div class="icon-left-column">
            <i class="fa fa-refresh fa-3x"></i>
            <h4>Cross Compatibility</h4>
            <p>
                Moderner was always built to be cross compatbile with everything possible mobile.
            </p>
        </div>

        <div class="icon-left-column">
            <i class="fa fa-heart fa-3x"></i>
            <h4>It's eye candy.</h4>
            <p>
                Moderner is simple, with a simple and elegant eye candy color combination.
            </p>
        </div>

        <div class="icon-left-column">
            <i class="fa fa-code fa-3x"></i>
            <h4>Clean, easy, code.</h4>
            <p>
                There's nothing complicated about Moderner. We documented it for everyone to use.
            </p>
        </div> --}}

        <a href="{{ route('index.menu') }}" class="button button-blue button-xs button-full uppercase ultrabold half-top">Masuk</a>


        <div class="decoration"></div>

    </div>
@endsection

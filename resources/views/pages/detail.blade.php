@extends('template.main')

@section('custom-css')
@endsection

@section('custom-js')
@endsection

@section('content')
    <div class="main">
        <div class="container">
            <div class="polaroid-effect half-bottom">
                <iframe width="100%" height="400px" src="{{ route('ar.show' , $id) }}" ></iframe>
            </div>
            <h1 class="text-shadow page-heading"><i class="fa fa-arrow-circle-o-right"></i>Bagian Binatang</h1>
            <div class="gallery gallery-thumbs gallery-square">
                @foreach($animal_part as $a)
                <a class="show-gallery" href="{{ asset('assets/image/'.$a->image) }}" title="<h4>{{ $a->name }}</h4> </br> {{ $a->description }}">
                    <img width="100" height="100" src="{{ asset('assets/image/'.$a->image) }}" data-src="{{ asset('assets/image/'.$a->image) }}" class="preload-image responsive-image" alt="img">
                </a>
                @endforeach
            </div>
            <h1 class="text-shadow page-heading"><i class="fa fa-arrow-circle-o-right"></i>{{ $animal->name }}</h1>
            <p class="text-shadow half-bottom">
               {{ $animal->description }}
            </p>

        </div>
        <div class="decoration"></div>
        <a  href="{{  route('index.list') }}" class="button button-dark button-full button-s uppercase ultrabold">Kembali</a>
@endsection

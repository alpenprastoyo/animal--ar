@extends('template.main')

@section('custom-css')
    <style rel="stylesheet" type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
                Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        .main-container {}

        /* HEADING */

        .heading {
            text-align: center;
        }

        .heading__title {
            font-weight: 600;
        }

        .heading__credits {
            margin: 10px 0px;
            color: #888888;
            font-size: 25px;
            transition: all 0.5s;
        }

        .heading__link {
            text-decoration: none;
        }

        .heading__credits .heading__link {
            color: inherit;
        }

        /* CARDS */

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            margin: 20px;
            width: 300px;
            height: 150px;
            display: grid;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
            transition: all 0.2s;
        }

        .card:hover {
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
            transform: scale(1.01);
        }

        .card__link,
        .card__exit,
        .card__icon {
            position: relative;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.9);
        }

        .card__link::after {
            position: absolute;
            top: 25px;
            left: 0;
            content: "";
            width: 0%;
            height: 3px;
            background-color: rgba(255, 255, 255, 0.6);
            transition: all 0.5s;
        }

        .card__link:hover::after {
            width: 100%;
        }

        .card__exit {
            grid-row: 1/2;
            justify-self: end;
        }

        .card__icon {
            grid-row: 2/3;
            font-size: 30px;
        }

        .card__title {
            grid-row: 3/5;
            font-weight: 900;
            color: #ffffff;
            text-align: center
        }



        /* CARD BACKGROUNDS */

        .card-1 {
            background: radial-gradient(#1fe4f5, #3fbafe);
        }

        .card-2 {
            background: radial-gradient(#fbc1cc, #fa99b2);
        }



        /* RESPONSIVE */

        @media (max-width: 1600px) {
            .cards {
                justify-content: center;
            }
        }

    </style>
@endsection

@section('custom-js')
@endsection

@section('content')
    <div class="main">
        <div class="main-container">
            <div class="heading">
                <p class="heading__credits">List Binatang</p>
            </div>
            <div class="cards">
                @foreach ($animal as $a)
                    <a target="_self" href="{{ route('ar.detail',$a->id) }}">
                        <div class="card card-1">
                            <h1 class="card__title">{{ $a->name }}</h1>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

    </div>
@endsection

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>AR ANIMAL</title>
    @yield('custom-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/mobile/styles/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/mobile/styles/framework.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
</head>

<body>
    <div id="page-preloader"></div>

    <div id="page-deco-top"></div>
    <div id="page-deco-bottom"></div>

    <div id="page-background"></div>
    <div id="page-transitions">

        @include('template.header')

        @include('template.menu')


        <div class="content">

            
        <div class="decoration decoration-margins no-bottom"></div>


            @yield('content')

            <div class="decoration decoration-margins no-bottom"></div>
            
            @include('template.footer')

        </div>


    </div>

    <script type="text/javascript" src="{{ asset('assets/mobile/scripts/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/scripts/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mobile/scripts/plugins.js') }}"></script>
    @yield('custom-js')
</body>

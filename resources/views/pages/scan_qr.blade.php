@extends('template.main')

@section('custom-css')
@endsection

@section('custom-js')
<script type="text/javascript" src="{{ asset('assets/qrcode/qrcodelib.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/qrcode/webcodecamjs.js') }}"></script>
<script type="text/javascript">
    var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
    var arg = {
        resultFunction: function(result) {
            var aChild = document.createElement('li');
            aChild[txt] = result.format + ': ' + result.code;
            // alert(result.code);
            // console.log(result.code);
            window.location.replace(result.code);
            // document.querySelector('body').appendChild(aChild);
        }
    };
    new WebCodeCamJS("canvas").init(arg).play();
</script>
@endsection

@section('content')
    <div class="main">
        <div class="container">
            <div class="polaroid-effect half-bottom">
                <canvas></canvas>
            </div>
            <h1 class="text-shadow page-heading"><i class="fa fa-arrow-circle-o-right"></i>Silahkan Scan QR Code</h1>
           
        </div>
        <div class="decoration"></div>
    
    </div>
@endsection

@extends('template.main')

@section('custom-css')
@endsection

@section('custom-js')
    <script type="text/javascript" src="https://unpkg.com/html5-qrcode@2.2.1/html5-qrcode.min.js"></script>
    <script>
        alert('coba');

        function docReady(fn) {
            // see if DOM is already available
            if (document.readyState === "complete" ||
                document.readyState === "interactive") {
                // call on next available tick
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        docReady(function() {
            var resultContainer = document.getElementById('qr-reader-results');
            var lastResult, countResults = 0;

            function onScanSuccess(decodedText, decodedResult) {
                if (decodedText !== lastResult) {
                    ++countResults;
                    lastResult = decodedText;
                    // Handle on success condition with the decoded message.
                    console.log(`Scan result ${decodedText}`, decodedResult);
                }
            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", {
                    fps: 10,
                    qrbox: 250
                });


            Html5Qrcode.getCameras().then(devices => {
                /**
                 * devices would be an array of objects of type:
                 * { id: "id", label: "label" }
                 */
                // alert('sad');
                
                if (devices && devices.length) {
                    var cameraId = devices[devices.length-1].id;
                    // .. use this to start scanning.
                }

                // alert(cameraId);

                const html5QrCode = new Html5Qrcode( /* element id */ "qr-reader");

                html5QrCode.start(
                    cameraId, {
                        fps: 10, // Optional, frame per seconds for qr code scanning
                        qrbox: {
                            width: 250,
                            height: 250
                        } // Optional, if you want bounded box UI
                    },
                    (decodedText, decodedResult) => {
                        // alert(decodedText);
                        window.location.replace(decodedText);
                        // do something when code is read
                    },
                    (errorMessage) => {
                        // alert('error 1')
                        // alert(errorMessage)
                        // parse error, ignore it.
                    })
                .catch((err) => {
                    // alert('error 2')
                    // alert(err.message)
                    // Start failed, handle it.
                });
            }).catch(err => {
                // alert('error   3')
                // alert(err)
            });

            // console.log(cameraId)

            // html5QrcodeScanner.render(onScanSuccess);

            


        });
    </script>
    {{-- <script type="text/javascript" src="{{ asset('assets/qrcode/qrcodelib.js') }}"></script>
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


        decoder = new WebCodeCamJS('canvas').buildSelectMenu(document.createElement('select'),
            'environment|back').init(arg);

        setTimeout(function() {            
            // Nothing done yet? Launch actual camera
            decoder.play();
        }, 500);
    </script> --}}
@endsection

@section('content')
    <div class="main">
        <div class="container">
            <div class="polaroid-effect half-bottom">
                {{-- <canvas></canvas> --}}
                <div id="qr-reader" style="height:400px"></div>
            </div>
            <h1 class="text-shadow page-heading"><i class="fa fa-arrow-circle-o-right"></i>Silahkan Scan QR Code</h1>

        </div>
        <div class="decoration"></div>

    </div>
@endsection

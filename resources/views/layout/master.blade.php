<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIMPLE MEGAMENU</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width = 1050, user-scalable = no" />
    <link rel="stylesheet" href="{{ asset('front-end/asset/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/asset/css/lightbox.css') }}">
    <!-- Font awesome -->

    <script type="text/javascript" src="{{ asset('front-end/turn-js/extras/jquery.min.1.7.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-end/turn-js/extras/modernizr.2.5.3.min.js') }}"></script>

    <!-- boostrap---link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- boostrap---link -->

    <script type="text/javascript" src="{{ asset('front-end/turn-js/extras/jquery.min.1.7.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front-end/turn-js/extras/modernizr.2.5.3.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3b62fe7d6c.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>


    <script src="{{ asset('js/toastify-js.js') }}"></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>

<body style="background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
">

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    @yield('content')




    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="{{ asset('front-end/asset/js/nav.js') }}"></script>
    <script src="{{ asset('front-end/asset/js/script.js') }}"></script>
    <script src="{{ asset('front-end/asset/js/lightbox-plus-jquery.js') }}"></script>

    <script>
        // Trigger click event on the next button to show page 2 by default
        document.addEventListener("DOMContentLoaded", function() {
            var nextBtn = document.getElementById("next-btn");
            nextBtn.click();
        });
    </script>


    {{-- <script type="text/javascript">
        function loadApp() {
            // Create the flipbook
            $('.flipbook').turn({
                // Width
                width: 603,
                // Height
                height: 500,
                // Elevation
                elevation: 50,
                // Enable gradients
                gradients: true,
                // Auto center this flipbook
                autoCenter: true,
                start: 2 // Start the flipbook on page 1
            });
        }
        $('#prevPage').on('click', function() {
            flipbook.turn('previous');
        });
        // Event handler for next page button
        $('#nextPage').on('click', function() {
            flipbook.turn('next');
        });
        yepnope({
            test: Modernizr.csstransforms,
            yep: ["{{ asset('front-end/turn-js/lib/turn.js') }}"],
            yep: ["{{ asset('front-end/turn-js/lib/turn.js') }}"],
            nope: ["{{ asset('front-end/turn-js/lib/turn.html4.min.js') }}"],
            both: ["{{ asset('front-end/turn-js/css/basic.css') }}"],
            complete: loadApp
        });
    </script> --}}

    <script type="text/javascript">

        $(document).ready(function() {
            var flipbook = $('.flipbook');
    
            function loadApp() {
                // Create the flipbook
                flipbook.turn({
                    // Width
                    width: 603,
                    // Height
                    height: 450,
                    // Elevation
                    elevation: 50,
                    // Enable gradients
                    gradients: true,
                    // Auto center this flipbook
                    autoCenter: true,
                });
            }
    



            $('#prevPage').on('click', function() {
            flipbook.turn('previous');
        });

        // Event handler for next page button
        $('#nextPage').on('click', function() {
            flipbook.turn('next');
        });
    
            yepnope({
                test : Modernizr.csstransforms,
                yep: ["{{asset('front-end/turn-js/lib/turn.js')}}"],
                yep: ["{{asset('front-end/turn-js/lib/turn.js')}}"],
                nope: ["{{asset('front-end/turn-js/lib/turn.html4.min.js')}}"],
                both: ["{{asset('front-end/turn-js/css/basic.css')}}"],
                complete: loadApp
            });
        });
        
    </script>
    




</body>

</html>

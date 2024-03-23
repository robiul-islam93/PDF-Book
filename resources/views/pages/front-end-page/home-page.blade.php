@extends('layout.master')
@section('title','Book Section')
@section('content')
    @include('components.front-end.components.navbar')

    </head>
    <body>
    
    <div class="flipbook-container">
        <div class="flipbook-viewport">
            <div class="container">
                <div class="flipbook">
                    <!-- Your flipbook pages -->
                    <div>
                        <img src="{{asset('front-end/asset/image/Screenshot_7.png')}}" width="333px" height="541px" alt="">
                    </div>
                    <div>
                        <img src="{{asset('front-end/asset/image/Screenshot_8.png')}}" width="333px" height="541px" alt="">
                    </div>
                    <div>
                        <img src="{{asset('front-end/asset/image/Screenshot_8.png')}}" width="333px" height="541px" alt="">
                    </div>
                    <div>
                        <img src="{{asset('front-end/asset/image/Screenshot_8.png')}}" width="333px" height="541px" alt="">
                    </div>
                    <div>
                        <img src="{{asset('front-end/asset/image/Screenshot_8.png')}}" width="333px" height="541px" alt="">
                    </div>
                    <div>
                        <img src="{{asset('front-end/asset/image/Screenshot_8.png')}}" width="333px" height="541px" alt="">
                    </div>
                    <div>
                        <img src="{{asset('front-end/asset/image/Screenshot_8.png')}}" width="333px" height="541px" alt="">
                    </div>
                    <div>
                        <img src="{{asset('front-end/asset/image/Screenshot_8.png')}}" width="333px" height="541px" alt="">
                    </div>
                    <!-- Add more pages as needed -->
                </div>
            </div>
        </div>
        <button id="prevPage" class="arrow-button">◀</button>
        <button id="nextPage" class="arrow-button">▶</button>
    </div>
    
    <audio id="clickSound">
        <source src="{{asset('front-end/asset/audio/flipcard-91468.mp3')}}" type="audio/mpeg"> <!-- Adjust the source path -->

    </audio>



    @include('components.front-end.components.search-model')
    @include('components.front-end.components.model')
    @include('components.front-end.components.sheare-model')
@endsection




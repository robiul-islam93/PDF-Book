@extends('layout.master')
@section('title','Book Section')
@section('content')
    @include('components.front-end.components.navbar')


    {{-- @include('components.front-end.page.book') --}}

{{-- 
    <section id="book-section">
        <!-- Previous Button -->
        <button id="prev-btn">
            <i class="fas fa-arrow-circle-left"></i>
        </button>

        <!-- Book -->
        <div id="book" class="book" style="border-radius: 20px"
            <!-- Paper 1 -->
            <div id="p1" class="paper">
                <div class="front">
                    <div id="f1" class="front-content">
                        <img src="./pix2.jpg" alt="Image 1" class="image" alt="">
                    </div>
                </div>
                <div class="back">
                    <div id="b1" class="back-content">
                        <img src="./pix2.jpg" alt="Image 1" class="image" alt="">
                    </div>
                </div>
            </div>
            <!-- Paper 2 -->
            <div id="p2" class="paper">
                <div class="front">
                    <div id="f2" class="front-content">
                        <img src="./pix2.jpg" alt="Image 1" class="image" alt="">
                    </div>
                </div>
                <div class="back">
                    <div id="b2" class="back-content">
                        <img src="./pix2.jpg" alt="Image 1" class="image" alt="">
                    </div>
                </div>
            </div>
            <!-- Paper 3 -->
            <div id="p3" class="paper">
                <div class="front">
                    <div id="f3" class="front-content">
                        <img src="./pix2.jpg" alt="Image 1" class="image" alt="">
                    </div>
                </div>
                <div class="back">
                    <div id="b3" class="back-content">
                        <img src="./pix2.jpg" alt="Image 1" class="image" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Next Button -->
        <button id="next-btn">
            <i class="fas fa-arrow-circle-right"></i>
        </button>

    </section> --}}

    {{-- <div class="containera" id="containera">
        <div class="book-content">

            <div class="book">
                <div class="face-front" id="portada"></div>
                <div class="face-back" id="trsf"></div>
            </div>

            <div class="book">
                <div class="face-front" id="threethp"></div>

                <div class="face-back" id="fourp"></div>
            </div>

            <div class="book">
                <div class="face-front" id="fivep"> </div>
                <div class="face-back" id="sixp"></div>
            </div>

            <div class="book">
                <div class="face-front" id="sevenp"></div>
                <div class="face-back" id="portada-back">
                </div>
            </div>
        </div>
    </div> --}}


    <div class="flipbook-viewport">
        <div class="container">
            <div class="flipbook">
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
                <div style="background-image:url({{asset('front-end/turn-js/samples/basic/pages/12.jpg')}})"></div>
            </div>
        </div>
    </div>





    @include('components.front-end.components.search-model')
    @include('components.front-end.components.model')
    @include('components.front-end.components.sheare-model')
@endsection




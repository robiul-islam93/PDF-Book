@extends('layout.master')
@section('title','Book Section')
@section('content')
    @include('components.front-end.components.navbar')
    {{-- @include('components.front-end.page.book') --}}

    <div class="container row">
        <div class="col-md-6">
            <img style="width: 100%; height: 300px; object-fit:cover;" src="/paper.jpg" alt="">
        </div>
        <div class="col-md-6">
            <img style="width: 100%; height: 300px; object-fit:cover;" src="/pix2.jpg" alt="">
        </div>
        <div class="col-md-6">
            <img style="width: 100%; height: 300px; object-fit:cover;" src="/pix3.jpg" alt="">
        </div>
        <div class="col-md-6">
            <img style="width: 100%; height: 300px; object-fit:cover;" src="/pix4.jpg" alt="">
        </div>
    </div>
    @include('components.front-end.components.model')
@endsection




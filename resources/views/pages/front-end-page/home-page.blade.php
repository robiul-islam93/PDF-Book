@extends('layout.master')
@section('title','Book Section')
@section('content')
    @include('components.front-end.components.navbar')
    {{-- @include('components.front-end.page.book') --}}
    @include('components.front-end.components.model')
@endsection

@extends('frontend.frontend-master')
@section('title', 'Read More Page')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <img src="{{ asset('/') }}{{ $post->post_image }}" alt="">
            <h1>{{ $post->post_image }}</h1>
            <p></p>
        </div>
    </div>
@endsection

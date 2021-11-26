@extends('layouts.app')

@section('content')
    <p>{{ $post->title }}</p>

    <img src="{{ $post->getImagePrefix( $post->post_img ) . $post->post_img }} " alt="">
    
@endsection
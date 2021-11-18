@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="title" placeholder="title" value="{{ $post->title }}">
        <input type="text" name="author" placeholder="author" value="{{ $post->author }}">
        <input type="text" name="author_img" placeholder="author_img" value="{{ $post->author_img }}">
        <input type="text" name="description" placeholder="description" value="{{ $post->description }}">
        <input type="text" name="post_img" placeholder="post_img" value="{{ $post->post_img }}">
        <button type="submit">Modifica</button>
    </form>
@endsection
@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="author" placeholder="author">
        <input type="text" name="author_img" placeholder="author_img">
        <input type="text" name="description" placeholder="description">
        <input type="text" name="post_img" placeholder="post_img">
        <button type="submit">Crea</button>
    </form>
@endsection
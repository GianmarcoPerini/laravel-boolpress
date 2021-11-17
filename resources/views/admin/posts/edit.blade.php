@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="title" value="{{$post->title}}">
        <button type="submit">Modifica</button>
    </form>
@endsection
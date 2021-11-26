@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div>
            @foreach ($tags as $tag)
                <input type="checkbox" name="tags[]" id="{{ $tag->name }}" value="{{ $tag->id }}">
                <label for="{{ $tag->name }}">{{ $tag->name }}</label>
            @endforeach

        <select name="category_id" id="category">
            <option value="">Nessuna categoria</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        </div>

        <input type="text" name="title" placeholder="title">
        <input type="text" name="author" placeholder="author">
        <input type="text" name="author_img" placeholder="author_img">
        <input type="text" name="description" placeholder="description">
        <input type="file" name="post_cover" placeholder="post_img">
        <button type="submit">Crea</button>
    </form>
@endsection
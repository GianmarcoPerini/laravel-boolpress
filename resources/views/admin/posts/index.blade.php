@extends('layouts.app')

@section('content')

{{-- @dd($posts) --}}
<div class="container">
    @auth
        <a href="{{ route('admin.posts.create') }}">Crea un nuovo post</a>
    @endauth
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Post Author</th>
                <th scope="col">Post Title</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td><a href="{{ route('admin.posts.show', $post) }}">{{ $post->author }}</a></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>
                    @if ($post->category)
                    {{$post->category->name}}
                    @else
                    ---
                @endif
                </td>

                
                @auth
                    <td><a href="{{ route('admin.posts.edit', $post) }}"><button class="btn btn-primary">Modifica</button></a></td>

                    <form action="{{ route('admin.posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><button class="btn btn-danger">Elimina</button></td>
                    </form>
                @endauth
                
                
            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection

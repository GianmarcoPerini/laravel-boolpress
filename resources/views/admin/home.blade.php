@extends('layouts.app')

@section('content')

{{-- @dd($posts) --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Post Author</th>
                <th scope="col">Post Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->author }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td><a href="{{ route('posts.edit', $post) }}"><button class="btn btn-primary">Modifica</button></a></td>
                
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <td><button class="btn btn-danger">Elimina</button></td>
                </form>
                
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('mail.store') }}" method="POST">
            @csrf
            <div>
                <input class="w-100" type="text" name="nome">
            </div>
            <div>
                <input class="w-100 my-4" type="text" name="mail">
            </div>
            <div>
                <textarea class="w-100" name="testo" id="" cols="30" rows="10"></textarea>
            </div>

            <button type="submit">Invia</button>
        </form>
    </div>
@endsection
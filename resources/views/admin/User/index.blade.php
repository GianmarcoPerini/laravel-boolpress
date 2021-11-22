@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>               
                <td>
                @foreach($user->role as $role)
                {{ $role->name }}
                @endforeach
                </td>               
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
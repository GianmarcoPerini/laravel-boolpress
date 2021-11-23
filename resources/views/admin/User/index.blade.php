@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th class="col-1">#</th>
                <th class="col-4">User Name</th>
                <th class="col-4">E-mail</th>
                <th class="col-2">Role</th>
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
                <div class="px-3 py-1 rounded-pill" style="background :{{ $role->color }}">{{ $role->name }}</div>
                @endforeach
                </td>               
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
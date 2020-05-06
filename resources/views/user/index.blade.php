@extends('layouts.app')


@section('content')

<div class="container">
    <table class="mt-4 table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Naam</th>
                <th scope="col">E-mail</th>
                <th scope="col">Adres</th>
                <th scope="col">Telefoonnummer</th>
                <th scope="col">Rol</th>
            </tr>
        </thead>
        @foreach ($users as $user)
        <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->telephone }}</td>
                <td>@if($user->user_role_id == 1)Admin
                    @else Gebruiker
                    @endif</td>

            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
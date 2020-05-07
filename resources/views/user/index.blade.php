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
                <th scope="col">Actie</th>
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
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" onclick="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?');" class="mt-2 btn btn-danger" value="verwijderen">
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
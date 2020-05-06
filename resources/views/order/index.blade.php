@extends('layouts.app')


@section('content')

<div class="container">
    <!-- <a href="{{ route('order.create')}}" class="btn btn-primary">Bestelling aanmaken</a> -->
    <table class="mt-4 table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Datum</th>
                <th scope="col">Werknemer</th>
                <th scope="col">Bedrijf</th>
                <th scope="col">Klant</th>
                <th scope="col">Status</th>
                <th scope="col">Actie</th>
            </tr>
        </thead>
        @foreach ($orders as $order)
        @if(auth::user()->id == $order->customer_id)
        <tbody>
            <tr>
                <td>{{ $order->id }}</>
                <td>{{ $order->date }}</td>
                <td>{{ $order->employees->first_name}} {{$order->employees->last_name}}</td>
                <td>{{ $order->companys->title}} </td>
                <td>{{ $order->customers->name }}</td>
                <td>@if($order->status == 0) Nog niet aangekomen
                    @else Aangekomen
                    @endif</td>
                <!--<td><a href="{{ route('order.edit', $order->id) }}" class="mb-2  btn btn-warning">Wijzigen</a><br>-->
                <td><a href="{{ route('order.show', $order->id) }}" class="btn btn-primary">Bekijk bestelling</a></td>
                    <!--<form action="{{ route('order.destroy', $order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="mt-2 btn btn-danger" value="verwijderen">
                    </form>
                </td>-->
            </tr>
        </tbody>
        @endif
        @endforeach
    </table>
</div>
@endsection
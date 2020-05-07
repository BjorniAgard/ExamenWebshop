@extends('layouts.app')


@section('content')

<div class="container">
    <table class="mt-4 table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Datum</th>
                <th scope="col">Werknemer</th>
                <th scope="col">Bedrijf</th>
                <th scope="col">Klant</th>
                <th scope="col">Producten</th>
                <th scope="col">Aantal</th>
                <th scope="col">Prijs per stuk</th>
                <th scope="col">Totale prijs</th>
                <th scope="col">Status</th>
                <th scope="col">Actie</th>
            </tr>
        </thead>
        @foreach ($orders as $order)
        @foreach( $order->products as $product)
        @foreach($order->orders as $ordered)
        <tbody>
            <tr>
                <td>{{ $order->id }}</>
                <td>{{ $ordered->date }}</td>
                <td>{{ $ordered->employees->first_name}} {{$ordered->employees->last_name}}</td>
                <td>{{ $ordered->companys->title}} </td>
                <td>{{ $ordered->customers->name }}</td>
                <td>{{ $product->name }} </td>
                <td>{{ $product->pivot->amount }}</td>
                <td>€{{ $price = str_replace('.', ',', $product->price)}}</td>
                <td>€{{ $totalProductPrice = $product->price * $product->pivot->amount}}</td>
                <td>@if($ordered->status == 0) Nog niet aangekomen
                    @else Aangekomen
                    @endif</td>
                <td><a href="{{ route('editOrderProduct.edit', $order->id) }}" class="mb-2  btn btn-warning">Wijzigen</a><br>
                    <form action="{{ route('destroyOrderProduct.destroy', $order->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="mt-2 btn btn-danger" value="verwijderen">
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
        @endforeach
        @endforeach
        <a href="{{ route('createOrderProduct.create', request()->route('order')) }}" class="btn btn-primary">Bestelling toevoegen</a>
        <a href="{{ route('order.index')}}" class="ml-3 btn btn-primary">Terug naar alle bestellingen</a>
    </table>
</div>
@endsection
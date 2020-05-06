@extends('layouts.app')


@section('content')

<div class="container">
    <!--<a href="{{ route('product.create')}}" class="btn btn-primary">Product aanmaken</>-->
    <table class="mt-4 table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Omschrijving</th>
                <th scope="col">Categorie</th>
                <th scope="col">Prijs</th>
                <th scope="col">Voorraad</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        @foreach ($products as $product)
        <tbody>
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->categories->category_name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>@if($product->stock > 0)Beschikbaar
                    @else Niet beschikbaar meer
                    @endif</td>
                <!--<td><a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Wijzigen</a>
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="mt-2 btn btn-danger" value="verwijderen">
                    </form>
                </td>-->
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
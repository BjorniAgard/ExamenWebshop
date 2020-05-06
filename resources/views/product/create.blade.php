@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="mt-5 row">
            <form class="col-md-5 offset-md-3" action="{{ route('product.store') }}" method="POST">
                @csrf
                <hr class="divisor">
                <div class="form-group">
                    <label for="title">Product</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <hr class="divisor">
                <div class="form-group">
                    <label for="description">Omschrijving</label>
                    <input type="text" name="description" class="form-control" required>
                </div>
                <hr class="divisor">
                <div class="form-group">
                    <label for="price">Prijs</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <hr class="divisor">
                <div class="form-group">
                    <label for="stock">Voorraad</label>
                    <input type="number" name="stock" class="form-control" required>
                </div>
                <hr class="divisor">
                <div class="form-group">
                    <label for="function">Categorie:</label>
                    <div id="custom-search-input">
                        <select class="form-control" name="category_id">
                        @foreach ($category as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->category_name }}</option>
                        @endforeach
                        </select>
                    </div>
                <button type="submit" class="mt-3 btn btn-primary topBtn">Aanmaken</button>
            </form>
        </div>
    </div>

@endsection

@extends('layouts.app')


@section('content')

<div class="container">
    <div class="mt-5 row">
        <form class="col-md-5 offset-md-3" action="{{ route('updateOrderProduct.update', $order->id) }}" method="POST">
            @csrf
            @method('PATCH')
                <input type="hidden" name="order_id" value="{{$order->order_id}}" class="form-control" required>
            <hr class="divisor">
            <div class="form-group">
                <label for="function">Producten:</label>
                <div id="custom-search-input">
                    <select class="form-control" name="product_id">
                        @foreach ($products as $product)
                        <option value="{{ $product->id }}"{{ $order->product_id === $product->id ? 'selected' : '' }}>{{ $product->name }} €{{ $product->price }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="amount">Aantal</label>
                <input type="number" name="amount" value="{{$order->amount}}" class="form-control" required>
            </div>
            <button type="submit" class="mt-3 btn btn-primary topBtn">Updaten</button>
        </form>
    </div>
</div>

@endsection
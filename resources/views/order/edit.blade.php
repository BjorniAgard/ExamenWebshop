@extends('layouts.app')


@section('content')

<div class="container">
    <div class="mt-5 row">
        <form class="col-md-5 offset-md-3" action="{{ route('order.update', $order->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <hr class="divisor">
            <div class="form-group">
                <label for="date">Datum</label>
                <input type="date" name="date" value="{{ $order->date }}" class="form-control" required>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="status">Status:</label>
                <div id="custom-search-input">
                    <select class="form-control" name="status">
                        <option value="1" {{ $order->status === 1 ? 'selected' : '' }}>Aangekomen</option>
                        <option value="0" {{ $order->status === 0 ? 'selected' : '' }}>Nog niet aangekomen</option>
                    </select>
                </div>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="function">Werknemers:</label>
                <div id="custom-search-input">
                    <select class="form-control" name="employee_id">
                        @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}"{{ $order->employee_id === $employee->id ? 'selected' : '' }}>  {{ $employee->first_name }} {{ $employee->last_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="function">Bedrijven:</label>
                <div id="custom-search-input">
                    <select class="form-control" name="company_id">
                        @foreach ($companies as $company)
                        <option value="{{ $company->id }}"{{ $order->company_id === $company->id ? 'selected' : ''}}> {{ $company->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="function">Klanten:</label>
                <div id="custom-search-input">
                    <select class="form-control" name="customer_id">
                        @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}"{{ $order->customer_id === $customer->id ? 'selected' : '' }}> {{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="mt-3 btn btn-primary topBtn">Updaten</button>
        </form>
    </div>
</div>

@endsection
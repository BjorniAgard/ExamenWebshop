@extends('layouts.app')


@section('content')

<div class="container">
    <div class="mt-5 row">
        <form class="col-md-5 offset-md-3" action="{{ route('order.store') }}" method="POST">
            @csrf
            <hr class="divisor">
            <div class="form-group">
                <label for="date">Datum</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="status">Status:</label>
                <div id="custom-search-input">
                    <select class="form-control" name="status">
                        <option value="1">Aangekomen</option>
                        <option value="0">Nog niet aangekomen</option>
                    </select>
                </div>
            </div>
            <hr class="divisor">
            <div class="form-group">
                <label for="function">Werknemers:</label>
                <div id="custom-search-input">
                    <select class="form-control" name="employee_id">
                        @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
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
                        <option value="{{ $company->id }}">{{ $company->title }}</option>
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
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="mt-3 btn btn-primary topBtn">Aanmaken</button>
        </form>
    </div>
</div>

@endsection
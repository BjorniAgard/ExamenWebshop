@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h5>lorem ipsum</h5>
            <img src="{{url('/images/product1.jpeg')}}" alt="Card image cap" width="150" height="150">
            <p class="mt-4">Nullam sem erat, porta a sem eget, 
                mattis luctus nisl. Integer vehicula, massa a
                 tincidunt sodales, sem dui porta enim, sit 
                 amet condimentum ligula mi porttitor mauris. Morbi non elit id lectus dignissim faucibus ut 
                 at risus. Morbi lobortis vel sem a imperdiet. Mauris euismod leo sollicitudin posuere vulputate.
                  Praesent bibendum sed tellus vitae rutrum.</p>
        </div>
        <div class="col-4">
        <h5>lorem ipsum</h5>
        <img src="{{url('/images/product2.jpeg')}}" alt="Card image cap" width="200" height="200">
            <p class="mt-4">Nullam sem erat, porta a sem eget, 
                mattis luctus nisl. Integer vehicula, massa a
                 tincidunt sodales, sem dui porta enim, sit 
                 amet condimentum ligula mi porttitor mauris. Morbi non elit id lectus dignissim faucibus ut 
                 at risus. Morbi lobortis vel sem a imperdiet. Mauris euismod leo sollicitudin posuere vulputate.
                  Praesent bibendum sed tellus vitae rutrum.</p>
        </div>
        <div class="col-4">
        <h5>lorem ipsum</h5>
        <img src="{{url('/images/product3.jpeg')}}" alt="Card image cap" width="250" height="250">
            <p class="mt-4">Nullam sem erat, porta a sem eget, 
                mattis luctus nisl. Integer vehicula, massa a
                 tincidunt sodales, sem dui porta enim, sit 
                 amet condimentum ligula mi porttitor mauris. Morbi non elit id lectus dignissim faucibus ut 
                 at risus. Morbi lobortis vel sem a imperdiet. Mauris euismod leo sollicitudin posuere vulputate.
                  Praesent bibendum sed tellus vitae rutrum.</p>
        </div>
    </div>
</div>
@endsection

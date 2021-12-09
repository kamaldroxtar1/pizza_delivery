@extends('master')
@include('includes.navigation')
@section('content')

<div class="container">
    <h1 class="mt-4">Shopping Cart</h1>
    <hr>
</div>
<div class="container">
    <table class="table">
        <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Delete</th>
        </thead>
        @foreach($carts as $cart)
        <tr>
        <td><img src="{{URL::asset('/uploads/'.$cart->product_image)}}" height="100px" width="100px" alt="image"></td>
        <td><h4>{{$cart->name}}</h4></td>
        <td><h4>{{$cart->quantity}}</h4></td>
        <td><h4>{{$cart->price}}</h4></td>
        <td><a href="delete/{{$cart->id}}" class="btn bg-dark text-light">Delete</a></td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td><h3>Total</h3></td>
            <td><h3>{{session('sum')}}</h3></td>
            <td><a href="checkout" class="btn bg-dark text-light">Checkout ></a></td>
        </tr>
    </table>
</div>

@endsection
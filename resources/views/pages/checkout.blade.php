@extends('master')
@include('includes.navigation')
@section('content')

<div class="container">
    <h3 class="mt-5">Checkout</h3>
    <hr>
    <p><h6>Orders will be Placed and payment method will be cash on delivery.</h6></p>
    <hr>
    <h5>Order Total: Rs {{session('sum')}}</h5>
    <br>
    <br>
    <a href="thanksfororder" class="btn bg-dark text-light">Checkout</a>
</div>

@endsection
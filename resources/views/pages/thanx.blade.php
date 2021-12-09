@extends('master')
@include('includes.navigation')
@section('content')

<div class="container">
    <h3 class="mt-5">Orders has been placed successfully !</h3>
    <button class="alert alert-success form-control">You will receive notifications by email with orders details.</button>
    <a href="menu" class="btn bg-dark text-light">Go and order some more</a>
</div>

@endsection
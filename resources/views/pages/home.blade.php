@extends('master')
@include('includes.nav')
@section('content')


<div style="background-color: #F4F5FF; height:400px" class="mt-5">
    <br>
    <div class="ml-5 mr-5">
        <h1 class="ml-5 mr-5 ">Pizza Delivery</h1>
    </div>
    <br>
    <div class="ml-5" style="width:1000px;">
        <h3 class="ml-5 mr-5">Welcome to pizza delivery service. This is the place where you may choose the most delicious pizza you like from the wide variety of options!</h3>
    </div>
    <br>
        <hr class="bg-dark" style="width: 900px;">
        <br>
    <div class="ml-5 text-center" style="width:1000px;">
        <h5 class="ml-5 mr-5">We are performing free delivery if your order value exceeds RS 500.</h5>
    </div>

    <div class="text-center"><a href="sign_order" class="btn bg-dark text-light" style="width: 900px;" >Sign In and      Order</a>
    </div>
</div>

@endsection
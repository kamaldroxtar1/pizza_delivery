@extends('master')
@include('includes.navigation')
@section('content')

<div class="container mt-5">
    <h3>Name : {{$user->name}}</h3>
    <h3>Contact : {{$user->contact}}</h3>
    <h3>Email : {{$user->email}}</h3>
</div>

@endsection
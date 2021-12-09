@extends('master')
@include('includes.navigation')
@section('content')
<div class="d-flex flex-wrap justify-content-around">
    @foreach($products as $product)
    <div class="card mb-3 mt-5" style="width: 18rem;">
        <img class="card-img-top pd-5" src="{{URL::asset('/uploads/'.$product->product_image)}}" alt="Card image cap">
        <div class="card-body">
            <form action="addtocart" method="post">
                @csrf
                <p class="card-text">
                <h3 class="text-center">{{$product->name}}</h3>
                <div class="text-center">
                        <input type="number" placeholder="Quantity" name="quantity">
                </div>
                <br>
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="pi" value="{{$product->product_image}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <div class="row">
                    <button type="submit" class="btn bg-dark text-light col-6 ml-3 mr-2">Add to cart</button>
                    <h5 class="">Rs {{$product->price}}</h5>
                </div>
                @if($errors->has('quantity'))
                    <span class="btn btn-danger">{{$errors->first('quantity')}}</span>
                @endif
                </p>
            </form>
        </div>
    </div>
    @endforeach

</div>


@endsection
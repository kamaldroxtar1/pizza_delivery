@extends('master')
@include('includes.nav')
@section('content')
@if(Session::has('success'))
        <div class="alert alert-success"> {{Session::get('success')}}</div>
@endif
@if(Session::has('error'))
        <div class="alert alert-danger"> {{Session::get('error')}}</div>
@endif
<div class="container mt-5">
    <h5>Login</h5>
    <form action="post_login" class="form-group" method="post">
        @csrf
        @if($errors->has('email'))
            <span class="btn btn-danger">{{$errors->first('email')}}</span>
        @endif
        <input type="email" placeholder="email" name="email" class="form-control">
        <br>
        @if($errors->has('password'))
            <span class="btn btn-danger">{{$errors->first('password')}}</span>
        @endif
        <input type="password" placeholder="password" name="password" class="form-control">
        <br>
        <button type="submit" class="btn bg-dark text-light">Login</button>
    </form>
</div>
<script>
$(document).ready(function(){
    if($('#form1').length>0){
        $('#form1').validate({
            rules:{
                email:{
                    required:true,
                    maxlength:50,
                    email:true
            }
        },
            messages:{
                email:{
                    required:'enter your email',
                    maxlength:'maximum length should be 50'
            }
        }
        })
    }
})
</script>

@endsection
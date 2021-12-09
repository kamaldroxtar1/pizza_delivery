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
    <h5>Sign up</h5>
    <form action="post_signup" id="form1" class="form-group" method="post">
        @csrf
        @if($errors->has('email'))
            <span class="btn btn-danger">{{$errors->first('email')}}</span>
            @endif
        <input type="email" placeholder="email" name="email" id="email"  class="form-control">
        <br>
        @if($errors->has('name'))
            <span class="btn btn-danger">{{$errors->first('name')}}</span>
            @endif
        <input type="text" placeholder="name" name="name" id="name"  class="form-control">
        <br>
        @if($errors->has('contact'))
            <span class="btn btn-danger">{{$errors->first('contact')}}</span>
            @endif
        <input type="text" placeholder="contact" name="contact" id="contact"  class="form-control">
        <br>
        @if($errors->has('password'))
            <span class="btn btn-danger">{{$errors->first('password')}}</span>
            @endif
        <input type="password" placeholder="password" name="password" id="password"  class="form-control">
        <br>
        @if($errors->has('cpassword'))
            <span class="btn btn-danger">{{$errors->first('cpassword')}}</span>
            @endif
        <input type="password" placeholder="confirm password" name="cpassword" id="cpassword"  class="form-control">
        <br>
        <button type="submit" class="btn bg-dark text-light">Sign up</button>
    </form>
</div>

<script>
$(document).ready(function(){
    if($('#form1').length>0){
        $('#form1').validate({
            rules:{
                name:{
                    required:true,
                    maxlength:10
                },
                email:{
                    required:true,
                    maxlength:50,
                    email:true
                },
                conatct:{
                    required:true,
                    maxlength:16
                },
                password:{
                    required:true,
                    maxlength:16
                },
                cpassword:{
                    required:true,
                    maxlength:16
                }
            },
            messages:{
                name:{
                    required:'enter first name',
                    maxlength:'maximum length should be 10'
                },
                email:{
                    required:'enter your email',
                    maxlength:'maximum length should be 50',
                    email:'enter valid email'
                },
                conatct:{
                    required:'enter your contact',
                    maxlength:'maximum length should be 16'
                },
                password:{
                    required:'enter your password',
                    maxlength:'maximum length should be 20'
                },
                cpassword:{
                    required:'enter your confirm password',
                    maxlength:'maximum length should not exceed 20'
                }
            }
        })
    }
})
</script>

@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class request_controller extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function signin(){
        return view('pages.login');
    }
    public function login(){
        return view('pages.login');
    }
    public function signup(){
        return view('pages.signup');
    }
    
}

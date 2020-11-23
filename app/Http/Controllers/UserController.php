<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginUser(){
        return view('login');
    }

    public function registerUser(){
        return view('register');
    }
}

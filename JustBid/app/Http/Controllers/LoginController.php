<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
   
    public function login(){
        return view('auth.login');
    }
   
}

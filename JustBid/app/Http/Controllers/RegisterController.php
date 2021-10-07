<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;



class RegisterController extends Controller
{
     public function register()
    {
        return view('auth.register');
    }
    

}
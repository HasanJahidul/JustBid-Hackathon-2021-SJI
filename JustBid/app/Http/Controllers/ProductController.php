<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;



class ProductController extends Controller
{
     public function show()
    {
        return view('customer.productDetails');
    }
    

}
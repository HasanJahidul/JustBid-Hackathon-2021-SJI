<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
   
    public function login(){
        return view('auth.login');
    }
     public function verify(LoginRequest $req){

        
            $status = Login::where('email',$req->email)
            ->where('password',$req->password)
            ->first();
           
        if($status)
        {
            
           $type= $status->type;
            
            if ($type == "customer")
            {
                $customer = Customer::where('email',$req->email)
                ->first();
                //dd($customer);
                $req->session()->put('email', $status->email);
               
                $req->session()->put('name', $customer->name);
                $req->session()->put('password', $customer->password);
                $req->session()->put('balance', $customer->balance);
                //$req->session()->put('email', $customer->email);
                $req->session()->put('type', $customer->type);
                $req->session()->put('phone', $customer->phone);
                //dd(session()->all());
                return redirect("/product-details");

            }
            elseif ($type == "seller")
            {
                $agent = Seller::where('email',$req->email)
                ->first();
                
                $req->session()->put('email', $agent->email);
                $req->session()->put('name', $agent->name);
                $req->session()->put('password', $agent->password);
                $req->session()->put('balance', $agent->balance);
                $req->session()->put('email', $agent->email);
                $req->session()->put('phone', $agent->phone); 
                $req->session()->put('nid', $agent->nid);
                $req->session()->put('dob', $agent->dob);
                $type=$req->session()->put('type', $agent->type);
                //dd(session()->all());
                  return redirect("/product-details");
            } 
            elseif ($type == "admin")
            {   
                $admin = Admin::where('email',$req->email)
                ->first();
                
                $req->session()->put('email', $admin->email);
                $req->session()->put('name', $admin->name);
                $req->session()->put('password', $admin->password);
                $req->session()->put('profit', $admin->profit);
                $req->session()->put('phone', $admin->phone); 
                $req->session()->put('nid', $admin->nid);
                $req->session()->put('dob', $admin->dob);
                $type=$req->session()->put('type', $admin->type);
                //dd(session()->all());
                 return redirect("/product-details");
            }
            
        }else{
            
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
            //return view('login.index');
        }

            

        
        
     }
}
   


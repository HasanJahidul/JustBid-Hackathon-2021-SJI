<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Validator;
use App\Models\Login;
use App\Models\Customer;
use App\Models\Seller;



class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.registration');
    }
    public function insert(RegisterRequest $req){
            if ($req-> password == $req-> password_confirmation)
            {
                $checkUser = Login::where('email',$req->email)
                ->first();
                $checkNid = Login::where('nid',$req->nid)
                ->first();
                $checkPhone = Login::where('phone',$req->phone)
                ->first();
                //dd($req);
                if($checkUser)
                {
                    $req->session()->flash('msg', 'User already Exist!');
                    return redirect('/register');
                }elseif($checkNid){
                    $req->session()->flash('msg', 'An Account Already registered with this nid !');
                    return redirect('/register');
                }elseif($checkPhone)
                {   
                    $req->session()->flash('msg', 'An Account Already registered with this Phone Number !');
                    return redirect('/register');

                }else{

                    $loginuser = new Login;
                    $loginuser->email = $req->email;
                    $loginuser->password = $req->password;
                    $loginuser->type = $req->type;
                    $loginuser->phone = $req->phone;
                    $loginuser->nid = $req->nid;
                    $loginuser->save();


                        if ($req->type =="customer"){

                            $customer = new Customer;
                            $customer->name = $req->name;
                            $customer->email = $req->email;
                            $customer->password = $req->password;
                            $customer->transaction_status = 1;
                            $customer->phone = $req->phone;
                            $customer->nid = $req->nid;
                            $customer->type = $req->type;
                            $customer->save();
                            return redirect('/login');

                        }elseif($req->type =="seller"){
                             $customer = new Seller;
                            $customer->name = $req->name;
                            $customer->email = $req->email;
                            $customer->password = $req->password;
                            $customer->transaction_status = 1;
                            $customer->phone = $req->phone;
                            $customer->nid = $req->nid;
                            $customer->type = $req->type;
                            $customer->save();
                            return redirect('/login');

                        }else{
                        $req->session()->flash('msg', 'Invalid User Type');
                        return redirect('/register');

                    }
            }
            
            }else{
                
                $req->session()->flash('msg', 'Password and Confirm Passowrd Does Not match!');
                return redirect('/register');
                //return view('login.index');
            }
            
        }

}
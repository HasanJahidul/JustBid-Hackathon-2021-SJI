@extends('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page'])

<div class="main-container">
        <div class="form-container">

                <form  method="post" class="the-form">

                    <label for="name">Name</label>
                    <input type="name" name="name" id="name" placeholder="Enter your name">

                    <label for="Number">Phone Number</label>
                    <input type="number" name="phone" id="phone" placeholder="Enter your number">
                    
                    <label for="text">Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter your address">
                    
                    <label for="number">NID</label>
                    <input type="number" name="nid" id="nid" placeholder="Enter your NID">
                    

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                     <label for="password">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your Confirm password">
                     <label for="password">User Type</label>
                    <select  type="text" name="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="{{ __('Account Type') }}">
                    <option value="admin" name= "admin" placeholder="{{ __('Account Type') }}">Seller</option>
                    <option value="customer" name= "customer" placeholder="{{ __('Account Type') }}">Customer</option>
                    </select>

                    <input type="submit" value="Sign Up">

                </form>

            </div>
            {{session('msg')}}
                                        
                        @foreach ($errors->all() as $err)
                            {{$err}}
                        @endforeach

            <div class="form-footer">
                <div>
                    <span>Do you have an account?</span> <a href="{{ route('login') }}">Sign In</a>
                </div>
            </div>

        </div>
    
@extends('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'])


<div class="main-container">
        <div class="form-container">

                <form method='post' class="the-form">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">

                    <input type="submit" value="Log In">

                </form>

            </div>

            <div class="form-footer">
                <div>
                    <span>Don't have an account?</span> <a  href= "{{ route('register.index') }}">Sign Up</a>
                </div>
            </div>

        </div>

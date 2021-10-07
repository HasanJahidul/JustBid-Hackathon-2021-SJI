@extends('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'])


<div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <!-- <form class="form" method="post" action="{{ route('login') }}"> -->
        <form class="form" method="post" >
            @csrf

            <div class="card card-login card-white">
                
                    <h1 align="center" class="card-title">{{ __('Log in') }}</h1>
                           <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                    </div>
                    <div >
                        <input type="password" placeholder="{{ __('Password') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Log in') }}</button>
                    <div >
                        <h6>
                            <a >{{ __('Create Account') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a>{{ __('Forgot password?') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>

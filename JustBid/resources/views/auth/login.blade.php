<div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <!-- <form class="form" method="post" action="{{ route('login') }}"> -->
        <form class="form" method="post" >
            @csrf

            <div class="card card-login card-white">
                
                    <h1 align="center" class="card-title">{{ __('Log in') }}</h1>
                        <input type="email" name="email" ">
                    </div>
                    <div >
                        <input type="password"  name="password" ">
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
@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-3">
</div>
    <div class="col-md-5">
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="text-center">{{ __('Login') }}</h2>

                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback alert-danger">
                            <strong>Invalid email or password</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback alert-danger  ">
                            <strong >Invalid email or password</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                </div>

                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="#" class="pull-right">{{ __('Forgot Your Password?') }}</a>
                </div>        
            </form>
            <p class="text-center"><a href="{{route('register')}}">Create an Account</a></p>
        </div>
    </div>
</div>
@endsection

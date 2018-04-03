<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
<div class="container">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <div class="login-form">
            
                <form action="{{route('admin')}}" method="get">
                    @csrf
                    <h2 class="text-center">Admin Log In</h2>       
                    <div class="form-group">
                        <input type="text" class="form-control" name='userId' placeholder="User Id" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name='password' placeholder="Password" required="required">
                    </div>
                    @include('layouts.errors')
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                    <div class="clearfix">
                        <div class='row'>
                            <a href="#" class="pull-right">Forgot Password?</a>
                            <a href="#" class="pull-left">Forgot user Id?</a>
                        </div>
                        <div class = 'row'>
                            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                        </div>
                    </div>        
                </form>
            </div>
            </div>
        </div>
</body>
</html>
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
                        <input type="email" class="form-control" name='email' placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name='password' placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                    <div class="clearfix">
                        <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                        <a href="#" class="pull-right">Forgot Password?</a>
                    </div>        
                </form>
            </div>
            </div>
        </div>
</body>
</html>
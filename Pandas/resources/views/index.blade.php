<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('head')
    <body> 
        <!-- https://mdbootstrap.com/components/navbar/ -->   
        @include('header')
        <!-- /navBar --> 

        <div class="container">
            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <!-- to use resources such as images, files should be in public folder -->
                <img src="images/banner.jpg" alt="banner" width="100%"></img>
            </div>

            <!-- Some images/links to menu, order online and sign in -->
            <div class="row">
                    <span class="col-md-2"></span>
                    <img class="col-md-3" alt="Menu">                    
                    <img class="col-md-3" alt="Order">
                    <img class="col-md-3" alt="Promotions">
            </div>
            <a type="button" class="btn-floating btn-lg btn-fb"><i class="fa fa-facebook"></i></a>
        </div>

        <!--Footer-->
        @include('footer')
        <!--/Footer-->
    </body>
<html>
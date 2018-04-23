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
                    <span class="col-sm-2"></span>
                    <div class="col-sm-3">
                        <div class="card" style="width: 100%;" >
                            <a href="{{route('menu')}}">
                                <img class="card-img-top" src="images/orangeChicken.jpg" width="200" height="181" alt="Menu">
                            </a>
                            <div class="card-body">
                                <a href="{{route('menu')}}" class="btn btn-primary">Menu</a>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-3'>
                        <div class="card col-sm-4" style="width: 100%;" >
                            <a href="{{route('menu')}}">
                                <img class="card-img-top" src="images/noodles.jpg" width="200" height="181" alt="order">
                            </a>
                            <div class="card-body">
                                <a href="{{route('menu')}}" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-3'>
                        <div class="card col-sm-4" style="width: 100%;" >
                            <a href="{{route('menu')}}">
                                <img class="card-img-top" src="images/eggRolls.jpg" width="200" height="181" alt="promotions">
                            </a>
                            <div class="card-body">
                                <a href="{{route('promotions')}}" class="btn btn-primary">Promotions</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <!--Footer-->
        @include('footer')
        <!--/Footer-->
    </body>
<html>
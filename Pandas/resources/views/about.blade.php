<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('head')
<body>
    @include('header')
    <div class='container'>
        <!-- carousel with images of the place --> 
        <div class='col-sm-9'>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                <img src="images/outside.jpg" alt="outside">
                </div>

                <div class="item">
                <img src="images/inside.jpg" alt="inside">
                </div>

                <div class="item">
                <img src="images/costumers.jpg" alt="costumers">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        
        <!-- history of the place and vision --> 
        <div class='col-sm-3'>
            <p>
                Some Text or history of the place
            <p>

        </div>
    </div>
    

    @include('footer')
</body>
</html>
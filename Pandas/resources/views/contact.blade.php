<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('head')
<body>
    @include('header')

    <div class='container'>
        <!-- This is for Google maps --> 
        <div class="col-md-9">
            <div id="map" style="width:100%;height:600px;background:#ffffff"></div>
        </div>
        <!--This is for contact info --> 
        <div class="col-md-3">
            <h4>Lucky Panda</h4>
            <span>2400 S Eola</span>
            <span>Aurora IL</span>
            <span>60503, 630.898.9360</span>
        </div>
    </div>
    

    @include('footer')
</body>
</html>

<script>
    function myMap() {
        var mapOptions = {
            center: new google.maps.LatLng(41.7106211, -88.2534762),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.RoadMap
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASBKqTJ2opdmAqOSHAV9LmXtkHcYzyqLA&callback=myMap"></script>
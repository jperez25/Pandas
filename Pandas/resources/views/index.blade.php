<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lucky Panda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--favicon 
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" /> -->

        <style>
            body{background-color: #fefff2}
        </style>

 
    </head>
    <body> 
        <!-- https://mdbootstrap.com/components/navbar/ -->   
        @include('header')

        <div class="container">
            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <!-- to use resources such as images, files should be in public folder -->
                <img src="images/banner.jpg" alt="banner" width="100%"></img>
            </div>

            <!-- Some images/links to menu, order online and sign in -->
            <div class="row">
                    <span class="col-md-2"></span>
                    <img class="col-md-3" alt="x">
                    <img class="col-md-3" alt="y">
                    <img class="col-md-3" alt="z">
            </div>

        </div>


        @include('footer')
    </body>
<html>
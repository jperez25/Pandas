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
                <h1>Navbar example</h1>
                <img src="../images/banner.jpg" alt="banner" height="42" width="42">
            </div>

            <!-- Some images/links to menu, order online and sign in -->

        </div>


        @include('footer')
    </body>
<html>
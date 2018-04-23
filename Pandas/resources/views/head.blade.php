<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lucky Panda') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!--Bootstrap online-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
        <script src="https://unpkg.com/popper.js"></script>    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-confirmation2/dist/bootstrap-confirmation.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!-- Styles local
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
        <link href="{{ asset('css/adminSideBar.css') }}" rel="stylesheet">
        <!--favicon 
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" /> -->

        <style>
            body{background-color: #fefff2}
        </style>
</head>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Styles local
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
        <!--favicon 
        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png" /> -->

        <style>
            body{background-color: #fefff2}
        </style>
</head>
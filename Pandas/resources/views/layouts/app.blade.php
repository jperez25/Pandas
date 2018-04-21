<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('head')
<body>
    <div id="app">
        @include('header')

        <div class="container">
            @yield('content')
        </div>
        @include('footer')
    </div>
</body>
@yield("scripts")
</html>

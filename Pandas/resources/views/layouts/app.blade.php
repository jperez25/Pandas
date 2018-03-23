<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('head')
<body>
    <div id="app">
        @include('header')

        <main class="py-4">
            @yield('content')
        </main>
        @include('footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

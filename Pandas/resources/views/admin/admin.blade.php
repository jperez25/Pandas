<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('head')
<body>
    @include('admin.navbar')

    <div id="wrapper">
        @include('admin.sidebar')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Welcome back {{Auth::user()->name}}!</h1>
                <p><-Here are some things you can change</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>

                <div id='results'>
                        @yield('content')                    
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <!-- Scripts -->
    @include('admin.scripts')
</body>
</html>

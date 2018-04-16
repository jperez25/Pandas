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
                <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
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

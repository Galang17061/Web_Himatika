<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIMATIKA ITS</title>
    @yield('extra_style')
    @include('layouts.layouts_frontend._css')
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    @include('layouts.layouts_frontend._nav')
    @yield('content')
    @include('layouts.layouts_frontend._footer')
    
    @yield('extra_scripts')
    @include('layouts.layouts_frontend._script')
</div>
</body>
</html>
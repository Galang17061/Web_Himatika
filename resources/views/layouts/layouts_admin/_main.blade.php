<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        @include('layouts.layouts_admin._css')
        @yield('extra_style')
    </head>

    <body data-topbar="colored">
        <div class="layout-wrapper">
            @include('layouts.layouts_admin._nav')
            @include('layouts.layouts_admin._side')
            @yield('content')
            @include('layouts.layouts_admin._footer')
            @include('layouts.layouts_admin._script')
            @yield('extra_script')
        </div>
    </body>

</html>

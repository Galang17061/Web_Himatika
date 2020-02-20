<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Brite</title>
        <meta name="keywords" content="themeforest template" />
        <meta name="description" content="best responsive html template in themeforest">
        <meta name="author" content="codelayers">

        <!-- Mobile view -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @include('layouts.layouts_info_kemahasiswaan.layouts_template._css')
        @yield('extra_style')
    </head>

    <body>
        <div class="wrapper-boxed">
            <div class="site-wrapper">
                @include('layouts.layouts_info_kemahasiswaan.layouts_template._loader')
                @include('layouts.layouts_info_kemahasiswaan.layouts_template._nav')
                @yield('content')
                @include('layouts.layouts_info_kemahasiswaan.layouts_template._footer')

            </div>
            <!--end site wrapper-->
        </div>
        <!--end wrapper boxed-->
        @include('layouts.layouts_info_kemahasiswaan.layouts_template._script')
    </body>

</html>

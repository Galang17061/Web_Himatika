<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('../assets_backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('../assets_backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('../assets_backend/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-primary bg-pattern">

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="height:76px">
                        <div class="text-center mb-5">
                            <a href="{{route('index')}}" class="logo"></a>
                            {{-- <h5 class="font-size-16 text-white-50 mb-4">Responsive Bootstrap 4 Admin Dashboard</h5> --}}
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Sign in</h5>
                                    <form class="form-horizontal" 
                                    method="get" action="{{ route('login') }}">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="text" class="form-control" name="username" id="username" required>
                                                    <label for="username">User Name</label>
                                                </div>

                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" name="password" class="form-control" id="userpassword" required>
                                                    <label for="userpassword">Password</label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="text-md-right mt-3 mt-md-0">
                                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('../assets_backend/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('../assets_backend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('../assets_backend/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('../assets_backend/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('../assets_backend/libs/node-waves/waves.min.js')}}"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <script src="{{asset('../assets_backend/js/app.js')}}"></script>

    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <!-- Meta Tags
        ========================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf_token" content="{{csrf_token()}}">

        <!-- Site Title
        ========================== -->
        <title>Login</title>

        <!-- Favicon
        ===========================-->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/fav-icon.png')}}">

        <!-- Web Fonts
        ========================== -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 

        <!-- Base & Vendors
        ========================== -->
        <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap-ar.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- ========================== -->
        <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">        

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            @yield('content')

        </div><!-- End Wrapper -->

        <!-- JS Base And Vendor
        ========================== -->
        <script src="{{asset('assets/admin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.js')}}"></script>
        <!-- Jquery validation-->
        <script src="{{asset('assets/admin/vendor/jquery-validation/js/jquery.validate.min.js')}}"></script>
        
        <script src="{{asset('assets/admin/js/login.js')}}"></script>
    </body>
</html>
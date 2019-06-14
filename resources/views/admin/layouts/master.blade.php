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
        <title>Holol</title>

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



        <link href="{{asset('assets/admin/vendor/data-table-plugin/datatables/datatables.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/vendor/data-table-plugin/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet">

        <!--DateRangPicker-->
        <link href="{{asset('assets/admin/vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <!-- Site Style
        ========================== -->
        <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">        
        <!--SummerNote Editor-->
        <link href="{{asset('assets/admin/vendor/bootstrap-summernote/summernote.css')}}" rel="stylesheet">
        <link href="{{asset('assets/admin/dropzone.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/admin/sweetalert.css')}}" rel="stylesheet" type="text/css" />


        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">

            @include('admin.layouts.header')

            @include('admin.layouts.sidebar')

            <div class="main">   

                @yield('content')

                @include('admin.layouts.footer')

            </div><!-- End Main-->
        </div><!-- End Wrapper -->
        @yield('modals')
                @yield('templates')

                <!-- common edit modal with ajax for all project -->
                <div id="common-modal" class="modal fade" role="dialog">
                    <!-- modal -->
                </div>

                <!-- delete with ajax for all project -->
                <div id="delete-modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                    </div>
                </div>
                <script id="template-modal" type="text/html" >
                    <div class = "modal-content" >
                        <input type = "hidden" name = "_token" value="{{ csrf_token() }}" >
                        <div class = "modal-header" >
                            <button type = "button" class = "close" data - dismiss = "modal" > &times; </button>
                            <h4 class = "modal-title bold" >هل تريد مسح العنصر ؟</h4>
                        </div>
                        <div class = "modal-body" >
                            <p >سيتم ازالة العنصر من قاعدة البيانات</p>
                        </div>
                        <div class = "modal-footer" >
                            <a
                                href = "{url}"
                                id = "delete" class = "custom-btn" >
                                <li class = "fa fa-trash" > </li> مسح
                            </a>

                            <button type = "button" class = "custom-btn" data-dismiss = "modal" >
                                <li class = "fa fa-times" > </li> أغلق</button >
                        </div>
                    </div>
                </script>
                
                @include('admin.templates.alerts')
                @include('admin.templates.delete-modal')

                <form action="#" id="csrf">{!! csrf_field() !!}</form>

        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

        <!-- JS Base And Vendor
        ========================== -->
        <script src="{{asset('assets/admin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{asset('assets/admin/dropzone.js')}}" type="text/javascript"></script>
        <!-- Jquery validation-->
        <script src="{{asset('assets/admin/vendor/jquery-validation/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/site.js')}}"></script>


        <!-- BEGIN PAGE LE                VEL PLUGINS -->
        <script src="{{asset('assets/admin/vendor/data-table-plugin/datatable.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/data-table-plugin/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/data-table-plugin/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"></script>

        <!-- date-range-picker -->
        <script src="{{asset('assets/admin/vendor/daterangepicker/moment.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/daterangepicker/daterangepicker.js')}}"></script>

        <script src="{{asset('assets/admin/vendor/data-table-plugin/script/table-datatables-editable.min.js')}}"></script>

        <!-- jquery.repeater -->
        <script src="{{asset('assets/admin/vendor/jquery-repeater/jquery.repeater.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendor/jquery-repeater/form-repeater.js')}}"></script>
        <!--SummerNote Editor-->
        <script src="{{asset('assets/admin/vendor/bootstrap-summernote/summernote.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/main.js')}}"></script>
        <script src="{{asset('assets/admin/js/main2.js')}}"></script>
        <script src="{{asset('assets/admin/process.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/admin/sweetalert.min.js')}}" type="text/javascript"></script>
    </body>
</html>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta char set="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{trans('Customers Phone List')}} | @yield('title')</title>

        <!-- ====================================== start css vito files ========================== -->
        <link href="{{asset('assets/plugins/vito/en/css/bootstrap.min.css?v=8.0.3')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/vito/en/css/typography.css?v=8.0.3')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/vito/en/css/style.css?v=8.0.3')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/vito/en/css/responsive.css?v=8.0.3')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/datatable/css/buttons.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/vito/en/css/custom-lang.css?v=8.0.3')}}" rel="stylesheet" type="text/css" />
        <!-- ====================================== end css vito files ============================ -->
    </head>
    <body>
        <div class="wrapper">
            <div id="content-page" class="content-page">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- ===============================  start vito js files =============================== -->
        <script src="{{asset('assets/plugins/vito/en/js/jquery-3.3.1.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/bootstrap.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/jquery.appear.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/countdown.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/jquery.counterup.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/wow.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/apexcharts.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/slick.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/select2.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/owl.carousel.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/jquery.magnific-popup.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/smooth-scrollbar.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/lottie.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/bodymovin.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/core.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/morris.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/morris.min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/raphael-min.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/worldLow.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/chart-custom.js?v=8.0.3')}}"></script>
        <script src="{{asset('assets/plugins/vito/en/js/custom.js?v=8.0.3')}}"></script>
        <!-- ===============================  start datatable js files =============================== -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
        <!-- ===============================  end datatable js files =============================== -->
        <script>
            $(document).ready(function() {
                $('.datatable-example').DataTable( {
                    searching: false,
                } );

                $('.iq-menu-bt-sidebar').on('click' , function(){
                    if($('.logo-text').hasClass('delete-logo-text')){
                        $('.logo-text').removeClass('delete-logo-text');
                    }else{
                        $('.logo-text').addClass('delete-logo-text');
                    }
                });

                $('.iq-sidebar').on('mouseleave' , function(){
                    if($('.logo-text').hasClass('delete-logo-text')){
                        $('.logo-text').fadeOut(300);
                    }
                });

                $('.iq-sidebar').on('mouseenter' , function(){
                    if($('.logo-text').hasClass('delete-logo-text')){
                        $('.logo-text').fadeIn(300);
                    }
                });
            } );

          

          
        </script>
        @yield('script')
        <!-- ===============================  end vito js files ================================= -->
    </body>
</html>

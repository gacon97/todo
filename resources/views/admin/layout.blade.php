<!DOCTYPE html>

<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="images/favicon.ico" type="image/ico"/>


    <title>Admin | </title>


    <!-- Bootstrap -->

    <link href="{{ asset('../admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="{{ asset('../admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- NProgress -->

    <link href="{{ asset('../admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- iCheck -->

    <link href="{{ asset('../admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">


    <!-- bootstrap-progressbar -->

    <link href="{{ asset('../admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"

          rel="stylesheet">

    <!-- JQVMap -->

    <link href="{{ asset('../admin/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>

    <!-- bootstrap-daterangepicker -->

    <link href="{{ asset('../admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Switchery -->

    <link href="{{ asset('../admin/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->

    <link href="{{ asset('../admin/build/css/custom.min.css') }}" rel="stylesheet">


    <link href="{{ asset('../admin/build/css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap Colorpicker -->

    <link href="{{ asset('../admin/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}"

          rel="stylesheet">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

    @stack('css')


</head>


<body class="nav-md">

<div class="container body">

    <div class="main_container">

        <div class="col-md-3 left_col">

            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">

                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin</span></a>

                </div>


                <div class="clearfix"></div>


                <!-- menu profile quick info -->

                <div class="profile clearfix">

                    <div class="profile_pic">

                        <img src="{{ asset('../admin/images/nam.jpg') }}" alt="..." class="img-circle profile_img">

                    </div>

                    <div class="profile_info">

                        <span>Welcome,</span>

                        <h2>Ngô Quang Nam</h2>

                    </div>

                </div>

                <!-- /menu profile quick info -->


                <br/>


                <!-- sidebar menu -->

                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">

                        <h3>General</h3>

                        <ul class="nav side-menu">

                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>

                                <ul class="nav child_menu">

                                    <li><a href="{{route('admin.home')}}">Dashboard</a></li>

                                </ul>

                            </li>


                            {{--{{<li><a><i class="fa fa-file-text"></i> Quản lí đơn hàng<span
                                            class="fa fa-chevron-down"></span></a>

                                <ul class="nav child_menu">

                                    <li><a href="{{ route('admin.bill.index') }}">Danh sách đơn hàng</a></li>


                                </ul>

                            </li>

                            <li><a><i class="fa fa-users"></i> Quản lí khách hàng<span
                                            class="fa fa-chevron-down"></span></a>

                                <ul class="nav child_menu">

                                    <li><a href="{{ route('admin.customers.index') }}">Danh sách khách hàng</a></li>


                                </ul>

                            </li>

                            <li><a><i class="fa fa-desktop"></i> Quản lí trang <span class="fa fa-chevron-down"></span></a>

                                <ul class="nav child_menu">

                                    <li><a href="{{ route('admin.banner.index') }}">Banner</a></li>

                                    <li><a>

                                            <span class="fa fa-chevron-down"></span>Sản Phẩm

                                        </a>

                                        <ul class="nav child_menu">

                                            <li class="sub_menu"><a href="{{ route('admin.product.index') }}">Danh sách

                                                    sản phẩm</a>

                                            </li>

                                            <li><a href="{{ route('admin.product.new') }}">Thêm sản phẩm</a>

                                            </li>


                                        </ul>

                                    </li>

                                    <li><a href="{{ route('admin.category.index') }}">Quản lí loại sản phẩm</a></li>}}--}}


                                </ul>

                            </li>


                        </ul>

                    </div>


                </div>

                <!-- /sidebar menu -->


                <!-- /menu footer buttons -->

                <div class="sidebar-footer hidden-small">

                    <a data-toggle="tooltip" data-placement="top" title="Settings">

                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>

                    </a>

                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">

                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>

                    </a>

                    <a data-toggle="tooltip" data-placement="top" title="Lock">

                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>

                    </a>

                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">

                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>

                    </a>

                </div>

                <!-- /menu footer buttons -->

            </div>

        </div>


        <!-- top navigation -->

        <div class="top_nav">

            <div class="nav_menu">

                <nav>

                    <div class="nav toggle">

                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>

                    </div>


                    <ul class="nav navbar-nav navbar-right">

                        <li class="">

                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"

                               aria-expanded="false">

                                <img src="images/img.jpg" alt="">Ngô Quang Nam

                                <span class=" fa fa-angle-down"></span>

                            </a>


                        </li>


                        <li role="presentation" class="dropdown">


                        </li>

                    </ul>

                </nav>

            </div>

        </div>

        <!-- /top navigation -->


        <!-- page content -->

    @yield('content')

    <!-- /page content -->


        <!-- footer content -->

        <footer>

            <div class="pull-right">

                code by Ngô Quang Nam

            </div>

            <div class="clearfix"></div>

        </footer>

        <!-- /footer content -->

    </div>

</div>


<script src="{{ asset('../admin/vendors/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap -->

<script src="{{ asset('../admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>


<!-- Chart.js -->

<script src="{{ asset('../admin/vendors/Chart.js/dist/Chart.min.js') }}"></script>

<!-- gauge.js -->

<script src="{{ asset('../admin/vendors/gauge.js/dist/gauge.min.js') }}"></script>


<!-- Skycons -->

<script src="{{ asset('../admin/vendors/skycons/skycons.js') }}"></script>

<!-- Flot -->

<script src="{{ asset('../admin/vendors/Flot/jquery.flot.js') }}"></script>

<script src="{{ asset('../admin/vendors/Flot/jquery.flot.pie.js') }}"></script>

<script src="{{ asset('../admin/vendors/Flot/jquery.flot.time.js') }}"></script>

<script src="{{ asset('../admin/vendors/Flot/jquery.flot.stack.js') }}"></script>

<script src="{{ asset('../admin/vendors/Flot/jquery.flot.resize.js') }}"></script>

<!-- Flot plugins -->

<script src="{{ asset('../admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>

<script src="{{ asset('../admin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>

<script src="{{ asset('../admin/vendors/flot.curvedlines/curvedLines.js') }}"></script>

<!-- DateJS -->

<script src="{{ asset('../admin/vendors/DateJS/build/date.js') }}"></script>

<!-- JQVMap -->

<script src="{{ asset('../admin/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>

<script src="{{ asset('../admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>

<script src="{{ asset('../admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>

<!-- bootstrap-daterangepicker -->


<!-- Autosize -->


<!-- FastClick -->

<script src="{{ asset('../admin/vendors/fastclick/lib/fastclick.js') }}"></script>

<!-- NProgress -->

<script src="{{ asset('../admin/vendors/nprogress/nprogress.js') }}"></script>

<!-- bootstrap-progressbar -->

<script src="{{ asset('../admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>

<!-- iCheck -->

<script src="{{ asset('../admin/vendors/iCheck/icheck.min.js') }}"></script>

<!-- bootstrap-daterangepicker -->

<script src="{{ asset('../admin/vendors/moment/min/moment.min.js') }}"></script>

<script src="{{ asset('../admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- bootstrap-wysiwyg -->

<script src="{{ asset('../admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>

<script src="{{ asset('../admin/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>

<script src="{{ asset('../admin/vendors/google-code-prettify/src/prettify.js') }}"></script>

<!-- jQuery Tags Input -->

<script src="{{ asset('../admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>

<!-- Switchery -->

<script src="{{ asset('../admin/vendors/switchery/dist/switchery.min.js') }}"></script>

<!-- Select2 -->

<script src="{{ asset('../admin/vendors/select2/dist/js/select2.full.min.js') }}"></script>

<!-- Parsley -->

<script src="{{ asset('../admin/vendors/parsleyjs/dist/parsley.min.js') }}"></script>

<!-- Autosize -->

<script src="{{ asset('../admin/vendors/autosize/dist/autosize.min.js') }}"></script>

<!-- jQuery autocomplete -->

<script src="{{ asset('../admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>

<!-- starrr -->

<script src="{{ asset('../admin/vendors/starrr/dist/starrr.js') }}"></script>

<!-- Custom Theme Scripts -->

<script src="{{ asset('../admin/build/js/custom.min.js') }}"></script>

<!-- Bootstrap Colorpicker -->

<script src="{{ asset('../admin/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<script type="text/javascript">

    $(document).ready(function () {

        $('#summernote').summernote({

            tabsize: 2,

            height: 450,

        });

    });

</script>

@stack('script')

</body>

</html>


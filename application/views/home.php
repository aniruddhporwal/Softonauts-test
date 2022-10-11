<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SIPL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jquery-ui.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <style>

    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            Nik Patel <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="remixicon-logout-box-line"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="dashboard.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.jpg" alt="" height="50">
                        <!-- <span class="logo-lg-text-light">Xeria</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="assets/images/logo-sm.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>


            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="dashboard.html" class="waves-effect">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="Kit-request.html" class="waves-effect">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Drop-In Center </span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">ISDQI</a></li>

                                        <li class="breadcrumb-item active">Drop-In Center</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Drop-In Center </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="col-md-12">
                            <div class="card-box">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#request-ass" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <span class="d-inline-block d-sm-none"></span>
                                            <span class="d-none d-sm-inline-block">Request Assisstance</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="request-ass">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="">Search Navigator </label>
                                                <input type="text" class="form-control" name="" id="" value="" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">

                                                <div class="widget-rounded-circle card-box">

                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-lg">
                                                                <img src="http://localhost/ISDQI/isdqi-app/assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="user">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <h5 class="mt-0">Test</h5>
                                                            <p class="text-muted mb-1 font-13">11 Main Street ,
                                                                Huntington, NY-11743
                                                                Contact Number: 5166625462</p>

                                                        </div>
                                                        <div class="col-md-4 text-right">
                                                            <button class="btn btn-primary btn-sm book_app" id="btn-appointment">Book Appointment</button>
                                                        </div>
                                                    </div>

                                                    <div class="mt-3" id="select_dr" style="display:none">
                                                        <div class="form-group col-md-8">
                                                            <label for="">Select Address</label>
                                                            <select class="form-control chosen-select-deselect" name="address_id" id="address_id">
                                                                <option value=""></option>
                                                                <?php if(isset($data->drop_in_navigator_list)) {
						                                    	foreach ($data->drop_in_navigator_list as $key => $value) {
						                                                           	               	 
																	for ($i = 0; $i < count($value->location_id); $i++) { ?>

																<option value="<?php echo $value->location_id[$i];  ?>"><?php echo $value->navigator_location[$i];  ?></option>

																	 <?php  } ?>
														<?php  }  }  ?>
                                                            </select>
                                                        </div>
                                                        <script>
                                                            var scrollEnabled = true;

                                                        </script>
                                                            <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">

                                                        <div id="example_3" class="p-3 b1 slots" style="display:none">
                                                                        
                                                        <ul role="tablist">
                                                                <li role="tab"><a href="#tabs-1" class="text-center" role="presentation">Mon
                                                                         jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small></a>
                                                                </li>
                                                                <li role="tab"><a href="#tabs-2" class="text-center" role="presentation">Tue
                                                                        2 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                                <li role="tab"><a href="#tabs-3" class="text-center" role="presentation">Wed
                                                                        3 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                                <li role="tab"><a href="#tabs-4" class="text-center" role="presentation">Thu
                                                                        4 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                                <li role="tab"><a href="#tabs-5" class="text-center" role="presentation">Fri
                                                                        5 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                                <li role="tab"><a href="#tabs-6" class="text-center" role="presentation">Sat
                                                                        6 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small></a>
                                                                </li>
                                                                <li role="tab"><a href="#tabs-7" class="text-center" role="presentation">Sun
                                                                        7 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small></a>
                                                                </li>
                                                                <li role="tab">

                                                                    <a href="#tabs-8" role="presentation">Mon
                                                                        8 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                                <li role="tab"><a href="#tabs-9" class="text-center" role="presentation">Tue
                                                                        9 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                            </ul>
                                                            <div>
                                                             
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div> <!-- end col -->

                        </div>

                    </div>

                </div> <!-- container -->

            </div> <!-- content -->

 

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                2020 © SIPL
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>


    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js"></script>

    <script src="assetes/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script> -->


    <!-- Peity chart-->
    <script src="assets/libs/peity/jquery.peity.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.ui.scrolltabs.js"></script>


    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
    <script>
        var $tabs;
        var scrollEnabled;
        $(function() {



                $('#example_3').scrollTabs({
                    scrollOptions: {
                        easing: 'swing',
                        enableDebug: false,
                        // closable: true,
                        showFirstLastArrows: false,
                        selectTabAfterScroll: true
                    }
                });
            }


        );

    </script>
    <script>
        $("#btn-appointment").click(function() {
            $("#select_dr").toggle();
        });

        $(function() {
            $('#example_3').hide();
            $('#address_id').change(function() {


            var address_id = $(this).val();
            var base_url = $("#base_url").val();
            $.ajax({
            type: "POST",
            url: base_url+"home/post_action", 
            data: {location_id: address_id},
            dataType: "text",  
            cache:false,
         success: 
              function(data){
                $('#example_3').show();
                $('#example_3').empty().append(data);
                console.log("data",data)
               // alert(data);  //as a debugging message.
              }
          });// you have missed this bracket
         return false;

                if ($('#address_id').val() == 'dr1' || $('#address_id').val() == 'dr2') {
                    $('#example_3').show();
                } else {
                    $('#example_3').hide();
                }
            });
        });

    </script>

</body>


</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="100*100" href="<?php echo base_url(); ?>assets/images/favicon.png">
        <title>Kodas Group</title>
        <!-- This page CSS -->
        <!-- chartist CSS -->
        <link href="<?php echo base_url(); ?>assets/node_modules/morrisjs/morris.css" rel="stylesheet">
        <!--Toaster Popup message CSS -->
        <link href="<?php echo base_url(); ?>assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
        <!--c3 plugins CSS -->
        <link href="<?php echo base_url(); ?>assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/dist/css/style.min.css" rel="stylesheet">
        <!-- Dashboard 1 Page CSS -->
        <link href="<?php echo base_url(); ?>assets/dist/css/pages/dashboard1.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/dist/css/pages/tab-page.css" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/node_modules/jsgrid/jsgrid.min.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/node_modules/jsgrid/jsgrid-theme.min.css" />

        <link href="<?php echo base_url(); ?>assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

       <link href="<?php echo base_url(); ?>assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/node_modules/dropify/dist/css/dropify.min.css">

        <style type="text/css">
            .bootstrap-select
            {
                width: 100% !important;
            }
            .dropdown-toggle::after
            {
                margin-left: -0.745em !important;
            }
        </style>
        <script type="text/javascript">
            var base_url = '<?=base_url();?>';
        </script>>
        
    </head>
    <body class="skin-default-dark fixed-layout lock-nav">
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Kodas Group</p>
            </div>
        </div>
        <div id="main-wrapper">
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="">
                           <span>
                             <!-- dark Logo text -->
                             <img  style="height: 50px;" src="<?php echo base_url(); ?>assets/images/kodas_logo.png" alt="homepage" class="dark-logo" />
                             <!-- Light Logo text -->    
                             <img src="<?php echo base_url(); ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav my-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="img-circle" width="30"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <span class="with-arrow"><span class="bg-primary"></span></span>
                                    <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                        <div class=""><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                                        <div class="m-l-10">
                                            <h4 class="m-b-0">Steave Jobs</h4>
                                            <p class=" m-b-0">varun@gmail.com</p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <div class="d-flex no-block nav-text-box align-items-center">
                    <span><img src="<?php echo base_url(); ?>assets/images/kodas_icon.png" alt="elegant admin template"></span>
                    <a class="nav-lock waves-effect waves-dark ml-auto hidden-md-down" href="javascript:void(0)"><i class="mdi mdi-toggle-switch"></i></a>
                    <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <!--  For Dashboard -->
                            <li> <a target="_blank" class="waves-effect waves-dark" href="<?php echo base_url(); ?>Home_controller" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>

                            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Master</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Ledger_controller">Ledger Master <i class="fa fa-circle-o text-info"></i></a></li>
                                     <li><a target="_blank" href="<?php echo base_url(); ?>Accountgroup_controller">Account Group Manager <i class="fa fa-circle-o text-info"></i></a></li>
                                     <li><a target="_blank" href="<?php echo base_url(); ?>Mill_controller">Mill Despatch Entry<i class="fa fa-circle-o text-info"></i></a></li>
                                   
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Accounttype_controller">Account Type Master <i class="fa fa-circle-o text-success"></i></a></li>
                                   <!--  <li><a target="_blank" href="<?php echo base_url(); ?>Market_controller">Market Master <i class="fa fa-circle-o text-info"></i></a></li> -->
                                   <li><a target="_blank" href="<?php echo base_url(); ?>Broker_controller">Broker Master <i class="fa fa-circle-o text-danger"></i></a></li>
                                    
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Company_controller">Company Master <i class="fa fa-circle-o text-info"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Hastelist_controller">Haste List Master <i class="fa fa-circle-o text-danger"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>QrCode_controller">QRCode Master <i class="fa fa-circle-o text-success"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Itemdetail_controller">Item Detail Master <i class="fa fa-circle-o text-success"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Itemtype_controller">Item Type Master <i class="fa fa-circle-o text-info"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Packagestyle_controller">Package Style Master <i class="fa fa-circle-o text-danger"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Category_controller">Category Master <i class="fa fa-circle-o text-success"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Screenbrand_controller">Brand Screen Series<i class="fa fa-circle-o text-success"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Screenregister_controller">Screen Register Entry Master <i class="fa fa-circle-o text-info"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Remark_controller">Remark Master <i class="fa fa-circle-o text-info"></i></a></li>
                                     <li><a target="_blank" href="<?php echo base_url(); ?>GreyQuality_controller">Grey Quality Master <i class="fa fa-circle-o text-info"></i></a></li>
                                      <li><a target="_blank" href="<?php echo base_url(); ?>Station_controller">Station Master <i class="fa fa-circle-o text-danger"></i></a></li>
                                      <li><a target="_blank" href="<?php echo base_url(); ?>User_controller">User Master <i class="fa fa-circle-o text-success"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>State_controller">State Master <i class="fa fa-circle-o text-info"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>City_controller">City Master <i class="fa fa-circle-o text-danger"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>Transport_controller">Transport Master <i class="fa fa-circle-o text-success"></i></a></li>
                                    <li><a target="_blank" href="<?php echo base_url(); ?>GstType_controller">GST Type Master <i class="fa fa-circle-o text-success"></i></a></li>

                                    <!-- <li><a target="_blank" href="<?php //echo base_url(); ?>GstType_controller">GST Type Master <i class="fa fa-circle-o text-success"></i></a></li> -->

                                    <li><a target="_blank" href="<?php echo base_url(); ?>Stock/Size_Number_controller">Size Number <i class="fa fa-circle-o text-success"></i></a></li>

                                    <li><a target="_blank" href="<?php echo base_url(); ?>Stock/Size_Character_controller">Size Alphabet <i class="fa fa-circle-o text-success"></i></a></li>

                                    <li><a target="_blank" href="<?php echo base_url(); ?>Stock/Color_controller">Color<i class="fa fa-circle-o text-success"></i></a></li>

                                </ul>
                            </li>

                             <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Transaction</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a target="_blank" href="<?php echo base_url(); ?>GreyPurchaseOrder">Grey Purchase Order<i class="fa fa-circle-o text-success"></i></a></li>

                                    <li><a target="_blank" href="<?php echo base_url(); ?>GreyPurchaseOrderBill">Grey Purchase Order Billing<i class="fa fa-circle-o text-info"></i></a></li>

                                    <li><a target="_blank" href="<?php echo base_url(); ?>FinishPurchaseOrder">Finish Purchase Order<i class="fa fa-circle-o text-danger"></i></a></li>

                                    <li><a target="_blank" href="<?php echo base_url(); ?>FinishPurchaseOrderBill">Finish Purchase Order Billing <i class="fa fa-circle-o text-success"></i></a></li>

                                    <li><a target="_blank" href="<?php echo base_url(); ?>SalesOrder">Sales Order<i class="fa fa-circle-o text-success"></i></a></li>

                                    <li><a target="_blank" href="<?php echo base_url(); ?>SalesOrderBill">Sales Order Billing<i class="fa fa-circle-o text-info"></i></a></li>
                                </ul>
                            </li>
							<!-- <li> <a target="_blank" class="waves-effect waves-dark" href="<?php echo base_url(); ?>Accountgroup_controller" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Account Group Manager</span></a></li> -->
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
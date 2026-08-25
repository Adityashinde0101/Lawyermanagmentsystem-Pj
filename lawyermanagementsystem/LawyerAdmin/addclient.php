<?php 
    session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Add Clients</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
        rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- chart -->
    <script src="js/Chart.js"></script>
    <!-- //chart -->
    <!--Calender-->
    <link rel="stylesheet" href="css/clndr.css" type="text/css" />
    d
    <script src="js/underscore-min.js" type="text/javascript"></script>
    <script src="js/moment-2.2.1.js" type="text/javascript"></script>
    <script src="js/clndr.js" type="text/javascript"></script>
    <script src="js/site.js" type="text/javascript"></script>
    <!--End Calender-->
    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.nav-second-level').hide(); // Hide the submenu initially

        // Toggle the submenu when the parent menu item is clicked
        $('a[href="#"]').click(function(){
            $(this).next('.nav-second-level').slideToggle();
        });
    });
</script>
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="client.php"><i class="fa fa-user nav_icon"></i>Client </a>
                        </li>
                        <li>
                            <a href="case.php"><i class="fa fa-gavel nav_icon"></i>Case </a>
                        </li>
                        <li>
                            <a href="task.php"><i class="fa fa-book nav_icon"></i>Task </a>
                        </li>
                        <li>
                            <a href="lawyer_booking.php"><i class="fa fa-calendar nav_icon"></i>Appointment </a>
                        </li>
                        <li>
                            <a href="invoice.php"><i class="fa fa-file nav_icon"></i>Invoice </a>
                        </li>
                        <!-- <li>
                            <a href="expence.php"><i class="fa fa-money nav_icon"></i>Expence<span
                                    class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="cash.php">Cash</a>
                                </li>
                                <li>
                                    <a href="online.php">Online</a>
                                </li>
                            </ul>
                           
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-cog nav_icon"></i>Setting<span
                                    class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="lawyer_edit_profile1.php">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="update_password_admin.php">Update Password</a>
                                </li>
                            </ul>
                            <!-- //nav-second-level -->
                        </li>
                </nav>
            </div>
        </div>
        <!--left-fixed -navigation-->
        <!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                <!--logo -->
                <div class="logo">
                    <a href="index.html">
                        <h1>LAW OFFICE</h1>
                        <span>LawyerPanel</span>
                    </a>
                </div>
                <!--//logo-->
                <!--search-box-->
                <div class="search-box">
                    <form class="input">
                        <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search"
                            id="input-31" />
                        <label class="input__label" for="input-31">
                            <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77"
                                preserveAspectRatio="none">
                                <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                            </svg>
                        </label>
                    </form>
                </div><!--//end-search-box-->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">

            <!-- notification -->
                <!-- <div class="profile_details_left">
                    <ul class="nofitications-dropdown">
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-envelope"></i><span class="badge">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new messages</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="images/2.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/3.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all messages</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-bell"></i><span class="badge blue">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new notification</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/2.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/3.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all notifications</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 8 pending task</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Database update</span><span
                                                class="percentage">40%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar yellow" style="width:40%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Dashboard done</span><span
                                                class="percentage">85%</span>
                                            <div class="clearfix"></div>
                                        </div>


                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all pending tasks</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                </div> -->
                <!--notification menu end -->
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="...." alt=""> </span>
                                    <div class="user-name">
                                    <p><?php echo $_SESSION['first_Name']; ?></p>
                                    <?php echo $_SESSION['last_Name']; ?>
                                        <span>Lawyer</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="lawyer_edit_profile.php"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                                <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="row-one">
                    <div class="col-md-4 widget">

                        <div class="clearfix"> </div>
                    </div>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f4;
                            margin: 0;
                            padding: 0;
                        }

                        .row {
                            margin: 10px;
                        }

                        .x_panel {
                            background-color: #fff;
                            padding: 20px;
                            border-radius: 5px;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        }

                        .form-group {
                            margin-bottom: 15px;
                        }

                        label {
                            font-weight: bold;
                        }

                        input[type="text"],
                        input[type="radio"],
                        select {
                            width: 100%;
                            padding: 10px;
                            margin-top: 5px;
                            margin-bottom: 10px;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            box-sizing: border-box;
                        }

                        button {
                            padding: 10px 20px;
                            font-size: 16px;
                            cursor: pointer;
                        }

                        .btn-danger {
                            background-color: #d9534f;
                            color: #fff;
                            border: 1px solid #d9534f;
                        }

                        .btn-success {
                            background-color: #5bc0de;
                            color: #fff;
                            border: 1px solid #5bc0de;
                        }
                    </style>
                    </head>

                    <body>
                        <form action="process_add_client.php" method="post">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <form id="add_client" name="add_client" role="form" method="POST"
                                            autocomplete="nope">
                                            <div class="x_content">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">First Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" placeholder="" class="form-control"
                                                            id="f_name" name="f_name">
                                                    </div>

                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Middle Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" placeholder="" class="form-control"
                                                            id="m_name" name="m_name">
                                                    </div>

                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Last Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" placeholder="" class="form-control"
                                                            id="l_name" name="l_name">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Gender <span
                                                                class="text-danger">*</span></label><br>

                                                        <input type="radio" name="gender" id="genderM" value="Male"
                                                            checked="" required />
                                                        &nbsp;&nbsp;Male:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="radio" name="gender" id="genderF"
                                                            value="Female" />&nbsp;&nbsp;Female
                                                    </div>


                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Email ID</label>
                                                        <input type="text" placeholder="" class="form-control"
                                                            id="email" name="email">
                                                    </div>

                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Mobile No. <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" placeholder="" class="form-control"
                                                            id="mobile" maxlength="10" name="mobile">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Alternate No.</label>
                                                        <input type="text" placeholder="" class="form-control"
                                                            id="alternate_no" name="alternate_no" maxlength="10">
                                                    </div>
                                                    <div class="col-md-9 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Address <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" placeholder="" class="form-control"
                                                            id="address" name="address">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Country <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control select-change country-select2"
                                                            name="country" id="country" data-url=""
                                                            data-clear="#city_id,#state">
                                                            <option value=""> Select Country</option>
                                                            <option value="india">India</option>
                                                            <!-- Add other countries if needed -->
                                                        </select>
                                                    </div>

                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">State <span
                                                                class="text-danger">*</span></label>
                                                        <select id="state" name="state" data-url=""
                                                            data-target="#country" data-clear="#city_id"
                                                            class="form-control state-select2 select-change">
                                                            <option value=""> Select State</option>
                                                            <option value="andhra_pradesh">Andhra Pradesh</option>
                                                            <option value="arunachal_pradesh">Arunachal Pradesh</option>
                                                            <option value="assam">Assam</option>
                                                            <option value="bihar">Bihar</option>
                                                            <option value="chhattisgarh">Chhattisgarh</option>
                                                            <option value="goa">Goa</option>
                                                            <option value="gujarat">Gujarat</option>
                                                            <option value="haryana">Haryana</option>
                                                            <option value="himachal_pradesh">Himachal Pradesh</option>
                                                            <option value="jammu_kashmir">Jammu and Kashmir</option>
                                                            <option value="jharkhand">Jharkhand</option>
                                                            <option value="karnataka">Karnataka</option>
                                                            <option value="kerala">Kerala</option>
                                                            <option value="madhya_pradesh">Madhya Pradesh</option>
                                                            <option value="maharashtra">Maharashtra</option>
                                                            <option value="manipur">Manipur</option>
                                                            <option value="meghalaya">Meghalaya</option>
                                                            <option value="mizoram">Mizoram</option>
                                                            <option value="nagaland">Nagaland</option>
                                                            <option value="odisha">Odisha</option>
                                                            <option value="punjab">Punjab</option>
                                                            <option value="rajasthan">Rajasthan</option>
                                                            <option value="sikkim">Sikkim</option>
                                                            <option value="tamil_nadu">Tamil Nadu</option>
                                                            <option value="telangana">Telangana</option>
                                                            <option value="tripura">Tripura</option>
                                                            <option value="uttar_pradesh">Uttar Pradesh</option>
                                                            <option value="uttarakhand">Uttarakhand</option>
                                                            <option value="west_bengal">West Bengal</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">City <span
                                                                class="text-danger">*</span></label>
                                                        <select id="city_id" name="city_id" data-url=""
                                                            data-target="#state" class="form-control city-select2">
                                                            <option value=""> Select City</option>
                                                            <option value="01">Mumbai</option>
                                                            <option value="02">Pune</option>
                                                            <option value="03">Nagpur</option>
                                                            <option value="04">Thane</option>
                                                            <option value="05">Nashik</option>
                                                            <option value="06">Chalisgaon</option>
                                                            <option value="07">Bhusawal</option>
                                                            <!-- Add other cities in Maharashtra if needed -->
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Reference Name </label>
                                                        <input type="text" placeholder="" class="form-control"
                                                            id="reference_name" name="reference_name">
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                                        <label for="fullname">Reference Mobile </label>
                                                        <input type="text" placeholder="" class="form-control"
                                                            id="reference_mobile" name="reference_mobile">
                                                    </div>

                                                </div>

                                                <div class="form-group pull-right">
                                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                                        <a href="" class="btn btn-danger">Cancel</a>
                                                        <input type="hidden" name="route-exist-check"
                                                            id="route-exist-check" value="">
                                                        <input type="hidden" name="token-value" id="token-value"
                                                            value="">
                                                        <button type="submit" class="btn btn-success"><i
                                                                class="fa fa-save" id="show_loader"></i>Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="clearfix"> </div>
                </div>
            </div>
            <!--footer-->
            <div class="footer">
                <p>&copy; All rights reserved. 2026</p>
            </div>
            <!--//footer-->
        </div>
        <!-- Classie -->
        <script src="js/classie.js"></script>
        <script>
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
                showLeftPush = document.getElementById('showLeftPush'),
                body = document.body;

            showLeftPush.onclick = function () {
                classie.toggle(this, 'active');
                classie.toggle(body, 'cbp-spmenu-push-toright');
                classie.toggle(menuLeft, 'cbp-spmenu-open');
                disableOther('showLeftPush');
            };


            function disableOther(button) {
                if (button !== 'showLeftPush') {
                    classie.toggle(showLeftPush, 'disabled');
                }
            }
        </script>
        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.js"> </script>
</body>

</html>
<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Add Invoices</title>
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
                                    <a href="lawyer_edit_profile.php">Edit Profile</a>
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
                                    <p><?php echo $_SESSION['first_Name']; ?>
                                    <?php echo $_SESSION['last_Name']; ?></p>
                                        <span>Lawyer</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="lawyer_edit_profile.php"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li>
                                <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--invoice-->
        <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    #page-wrapper {
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .main-page {
        padding: 20px;
    }

    .widget {
        background-color: #ffffff;
        border: 1px solid #dddddd;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    h2 {
        margin-top: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    input[type="text"],
    input[type="date"] {
        width: calc(100% - 16px); /* Adjust for padding */
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }

    input[type="text"]:focus,
    input[type="date"]:focus {
        outline: none;
        border-color: #4CAF50;
    }

    .container {
        margin-bottom: 20px;
    }

    .invoice-details {
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
    }

    .customer-details h3 {
        margin-top: 0;
    }

    .customer-details table {
        width: 100%;
    }

    .customer-details th {
        width: 25%;
    }

    .customer-details input[type="text"] {
        width: 75%;
    }

    .invoice-details table {
        width: 100%;
    }

    .invoice-details th {
        width: 50%;
    }

    #totalAmount {
        font-weight: bold;
    }

    .x_panel {
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .x_content {
        padding: 0;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-md-4 {
        flex: 0 0 auto;
        width: 33.33333%;
        max-width: 33.33333%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    select {
        width: calc(100% - 22px); /* Adjust for padding and border */
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }

    .btn {
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-danger {
        background-color: #d9534f;
        color: #fff;
    }

    .btn-success {
        background-color: #5cb85c;
        color: #fff;
    }

    .btn:hover {
        background-color: #4CAF50;
    }
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"] {
            width: calc(100% - 10px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="date"]:focus {
            outline: none;
            border-color: #007bff;
        }

        h2, h3 {
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .invoice-heading {
            background-color: #007bff; /* Blue background color */
            color: #fff; /* White text color */
            padding: 10px; /* Add padding for better visibility */
            width: 80%; /* Set width to 80% */
            border-radius: 5px; /* Add rounded corners */
            text-align: center; /* Center align the text */
            margin: 0 auto; /* Center align horizontally */
        }
        .invoice-heading h2 {
            margin: 0; /* Remove default margin for h2 */
            color: #fff; /* White text color */
        }
        
</style>

<div id="page-wrapper">
    <div id="main-page" style="width=826px";>
<br><br><br>
        <form id="invoiceForm" action="process_add_invoice.php" method="post">
             <div class="invoice-heading">
        <h2>Add Invoices</h2>
    </div><br><br>
            <div class="container">
                                
                <label for="invoiceDateInput">Invoice Date:</label>
                <input type="date" name="invoicedate" id="invoiceDateInput">
            </div>

            <div class="container">
                <h3>Customer Details</h3>
                <div class="row">
                    <div class="col-md-4">
                        <label for="customerNameInput">Name:</label>
                        <input type="text" name="cname" id="customerNameInput" placeholder="Enter Customer Name">
                    </div>
                    <div class="col-md-4">
                        <label for="customerAddressInput">Address:</label>
                        <input type="text" name="caddress" id="customerAddressInput" placeholder="Enter Customer Address">
                    </div>
                    <div class="col-md-4">
                        <label for="customerCityInput">City:</label>
                        <input type="text" name="ccity" id="customerCityInput" placeholder="Enter Customer City">
                    </div>
                </div>
            </div>

            <div class="container">
                <h3>Service Details</h3>
                <div class="row">
                    <div class="col-md-6">
                        <label for="service1NameInput">Service 1:</label>
                        <input type="text" name="s1name" id="service1NameInput" placeholder="Enter Service 1 Name">
                    </div>
                    <div class="col-md-6">
                        <label for="service1PriceInput">Price:</label>
                        <input type="text" name="s1price" id="service1PriceInput" placeholder="Enter Service 1 Price">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="service2NameInput">Service 2:</label>
                        <input type="text" name="s2name" id="service2NameInput" placeholder="Enter Service 2 Name">
                    </div>
                    <div class="col-md-6">
                        <label for="service2PriceInput">Price:</label>
                        <input type="text" name="s2price" id="service2PriceInput" placeholder="Enter Service 2 Price">
                    </div>
                </div>
            </div>

            <div class="container">
                <h3>Other Bill</h3>
                <div class="row">
                    <div class="col-md-6">
                        <label for="shippingDescriptionInput">Shipping Description:</label>
                        <input type="text" name="shipdescription" id="shippingDescriptionInput" placeholder="Enter Shipping Description">
                    </div>
                    <div class="col-md-6">
                        <label for="shippingAmountInput">Amount:</label>
                        <input type="text" name="shipamount" id="shippingAmountInput" placeholder="Enter Shipping Amount">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="taxDescriptionInput">Tax Description:</label>
                        <input type="text" name="tdescription" id="taxDescriptionInput" placeholder="Enter Tax Description">
                    </div>
                    <div class="col-md-6">
                        <label for="taxAmountInput">Amount:</label>
                        <input type="text" name="tamount" id="taxAmountInput" placeholder="Enter Tax Amount">
                    </div>
                </div>
            </div>

            <div class="container">
                <h3>Total Amount</h3>
                <table>
                    <tr>
                        <th>Total:</th>
                        <td><input type="hidden" name="total" id="totalAmountInput">
</td>
                    </tr>
                </table>
            </div>

            <div class="container">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"
                                        id="show_loader"></i>Save</button>
            </div>
        </form>
    </div>
    </div>


        <script>
       function calculateTotalAmount() {
    var service1Price = parseFloat(document.getElementById("service1PriceInput").value) || 0;
    var service2Price = parseFloat(document.getElementById("service2PriceInput").value) || 0;
    var shippingAmount = parseFloat(document.getElementById("shippingAmountInput").value) || 0;
    var taxAmount = parseFloat(document.getElementById("taxAmountInput").value) || 0;

    var totalAmount = service1Price + service2Price + shippingAmount + taxAmount;
    document.getElementById("totalAmount").textContent = "₹" + totalAmount.toFixed(2);
    
    // Update hidden input field with total amount
    document.getElementById("totalAmountInput").value = totalAmount.toFixed(2);
}

// Call calculateTotalAmount function whenever inputs change
document.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', calculateTotalAmount);
});
 </script>
    </div>
    </div>
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
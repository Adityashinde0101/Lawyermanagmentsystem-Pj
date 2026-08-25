<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <title>About Us - Lawyer Management System</title>
    <style>
        .about-hero {
            background: linear-gradient(135deg, #17a2b8 0%, #117a8b 100%);
            color: #ffffff;
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
        }
        .about-hero h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .about-hero p {
            font-size: 1.2rem;
            max-width: 750px;
            margin: 0 auto;
            opacity: 0.95;
        }
        .feature-box {
            background: #ffffff;
            border-radius: 8px;
            padding: 30px 20px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border-top: 4px solid #17a2b8;
        }
        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }
        .feature-icon {
            font-size: 2.5rem;
            color: #17a2b8;
            margin-bottom: 20px;
        }
        .section-title {
            text-align: center;
            font-weight: 700;
            color: #333;
            margin-bottom: 40px;
            position: relative;
        }
        .section-title::after {
            content: "";
            width: 60px;
            height: 3px;
            background: #17a2b8;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .contact-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 30px;
            margin-top: 20px;
            border-left: 5px solid #17a2b8;
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .contact-item i {
            font-size: 1.3rem;
            color: #17a2b8;
            margin-right: 15px;
            width: 25px;
        }
    </style>
</head>
<body>
    <header class="customnav bg-info">
        <div>
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg ">
                        <img src="photos/ashok.png" class="fixed-image" width="85" height="85" alt="Emblem">
                        <div class="container">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto ">
                                    <li class="">
                                        <a class="nav-link cus-a" href="index.php">Home</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-link cus-a" href="lawyers.php">Lawyers</a>
                                    </li>
                                    <li class="active">
                                        <a class="nav-link cus-a" href="about.php">About Us <span class="sr-only">(current)</span></a>
                                    </li>
                                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == TRUE) { ?>
                                        <li class="">
                                            <a class="nav-link cus-a" href="logout.php">Logout</a>
                                        </li>
                                    <?php } else { ?>
                                        <li class="">
                                            <a class="nav-link cus-a" href="login.php">Login</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Register
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="lawyer_register.php">Register as a lawyer</a>
                                                <a class="dropdown-item" href="user_register.php">Register as a user</a>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="about-hero">
        <div class="container">
            <h1><i class="fa fa-balance-scale"></i> About Lawyer Management System</h1>
            <p>A unified digital platform dedicated to making legal services accessible, transparent, and seamless for clients and legal practitioners alike.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mb-5">
        <!-- Mission & Overview -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2 class="font-weight-bold text-dark mb-3">Empowering Legal Practice & Client Representation</h2>
                <p class="text-muted leading-relaxed">
                    The <strong>Lawyer Management System</strong> is engineered to bridge the communication gap between citizens seeking legal counsel and certified legal professionals.
                </p>
                <p class="text-muted leading-relaxed">
                    Whether you are an individual navigating a complex civil dispute, a business requiring corporate governance support, or an advocate managing hundreds of active cases and billing schedules, our system brings digital ease to traditional legal workflows.
                </p>
                <div class="mt-4">
                    <a href="lawyers.php" class="btn btn-info mr-2"><i class="fa fa-search"></i> Find an Advocate</a>
                    <a href="lawyer_register.php" class="btn btn-outline-info"><i class="fa fa-user-plus"></i> Join as a Lawyer</a>
                </div>
            </div>
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <img src="law2.jpg" alt="Legal System" class="img-fluid rounded shadow-lg" style="max-height: 340px; object-fit: cover; width: 100%;">
            </div>
        </div>

        <!-- Pillars / Offerings -->
        <h3 class="section-title mt-5">What We Deliver</h3>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <div class="feature-icon"><i class="fa fa-users"></i></div>
                    <h5 class="font-weight-bold">For Clients</h5>
                    <p class="text-muted">Easily browse verified lawyers by specialty (Criminal, Civil, Corporate, IT, Family law), check experience length, and book instant consultations online.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <div class="feature-icon"><i class="fa fa-gavel"></i></div>
                    <h5 class="font-weight-bold">For Advocates</h5>
                    <p class="text-muted">Full practice management: maintain digital case registries, manage client documents, assign tracking tasks, and generate printable client invoices with ease.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box text-center">
                    <div class="feature-icon"><i class="fa fa-shield-alt"></i></div>
                    <h5 class="font-weight-bold">Integrity & Security</h5>
                    <p class="text-muted">Rigorous administrative verification of advocate profiles, encrypted credential protection, and automated email confirmation for appointments.</p>
                </div>
            </div>
        </div>

        <!-- Contact & Details Section -->
        <h3 class="section-title mt-5">Get in Touch</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-card">
                    <h5 class="font-weight-bold mb-4"><i class="fa fa-headset text-info"></i> Support & Enquiries</h5>
                    <div class="contact-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <span>Maharashtra, India</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <span>support@lawyermanagement.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <span>+91 98765 43210</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-clock"></i>
                        <span>Monday - Saturday: 9:00 AM - 7:00 PM</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-card">
                    <h5 class="font-weight-bold mb-3"><i class="fa fa-question-circle text-info"></i> Need Immediate Help?</h5>
                    <p class="text-muted">Looking for legal assistance right now? Browse our directory of approved advocates and send a booking request in under 2 minutes.</p>
                    <a href="searchLawyer.php" class="btn btn-block btn-info mt-3"><i class="fa fa-search"></i> Search Advocates Directory</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-info text-white py-3 mt-5">
        <div class="container text-center">
            <p class="mb-0 font-weight-bold">&copy; <?php echo date("Y"); ?> Lawyer Management System. All rights reserved.</p>
        </div>
    </footer>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
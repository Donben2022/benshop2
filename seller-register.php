<?php $phone_number = $email_address = $username = $password = $confirm_password = $message = $last_name = $first_name = $location = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="BenShop">
    <meta name="keywords" content="BenShop">
    <meta name="author" content="BenShop">
    <link rel="icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <title>BenShop - Create New Account</title>


    <link rel="stylesheet" type="text/css" href="assets/css/vendors/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/toastr-btn.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/toastr-options.js"></script>
</head>

<body class="theme-color-1">


    <?php include 'seller-header.php'; ?>


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Seller's Create Account</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Create Account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>create account</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" autocomplete="off" action="">
                            <?php
                            if (isset($_POST["register"])) {
                                require 'functions/seller-register.php';
                            }
                            ?>
                            <?php echo $message ?>
                            <div class="form-row row">
                                <div class="col-md-4">
                                    <label for="email">First Name</label>
                                    <input type="text" class="form-control" id="fname" placeholder="Write First Name Here" name="first_name" value="<?php echo $first_name; ?>" style="text-transform:capitalize;">
                                </div>
                                <div class="col-md-4">
                                    <label for="review">Last Name</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name here" name="last_name" value="<?php echo $last_name; ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="review">Phone Number</label>
                                    <input type="number" min="1" class="form-control" id="lname" placeholder="Enter Valid Phone Number" name="phone_number" value="<?php echo $phone_number; ?>">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="username">Email Address</label>
                                    <input type="text" class="form-control" id="emailadd" name="email_address" placeholder="Enter your valid Email Address" value="<?php echo $email_address; ?>">

                                </div>
                                <div class="col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" value="<?php echo $username; ?>">
                                </div>
                                <div class="col-md-12">
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="username">Location</label>
                                    <textarea name="location" id="" cols="30" rows="10" class="form-control"><?php echo $location; ?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" value="<?php echo $password; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="username">Confrm Password</label>
                                    <input type="password" class="form-control" id="username" name="confirm_password" placeholder="Confirm your password" value="<?php echo $confirm_password; ?>">
                                </div>

                                <button type="submit" class="btn btn-solid w-auto" name="register">Create Seller Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->

    <!-- menu js-->
    <script src="assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- slick js-->
    <script src="assets/js/slick.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="assets/js/bootstrap-notify.min.js"></script>

    <!-- Theme js-->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>
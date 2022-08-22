<?php
include "connect.php";
include "functions.php";

if(isset($_POST["first_name"])){
    $first_name =sanitizePost($_POST['first_name']);
    $last_name =sanitizePost($_POST['last_name']);
    $email =sanitizePost($_POST['email']);
    $phone =sanitizePost($_POST['phone']);
    $address =sanitizePost($_POST['address']);
    $password = hashPassword($_POST['password']);
     
    if(check_user($email)=="" && check_service_provider($email)==""){
    user_registration($first_name, $last_name, $email, $phone, $password, $address);
        header("location: register_confirm.php");
    }else{
        $resp = "User already exists!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - Users Registration</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <?php include 'header.php'; ?>

        <!-- Page Title -->
        <section class="page-title style-two" style="background-image: url(carbk.jpg);">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                        <h1>Create an Account</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>User Registration</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- login-section -->
        <section class="login-section bg-color-2">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="inner-box">
                        <h2>Registration</h2>
                        <form  method="post" class="login-form">
                              <?php
                if(isset($resp)){ ?>
                <div class="alert alert-danger">
                <?php echo $resp; ?> </div>
                <?php  } ?>

                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="first_name" required="">
                            </div> 
                             <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" required="">
                            </div> 
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" required="">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="phone" required="">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" required="">
                            </div>
                           
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn-one">Submit</button>
                            </div>
                             <div class="form-group">
                                <div class="text-center"><a href="login.php">Already have an account? Log in</a></div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- login-section end -->


        <!-- main-footer -->
       <?php include 'footer.php'; ?>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="far fa-long-arrow-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/product-filter.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>

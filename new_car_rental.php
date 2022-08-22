<?php
include "connect.php";
include "functions.php";
include 'service_providers.php';


if(isset($_COOKIE["provider_id"])){
$provider = new ServiceProviders($_COOKIE["provider_id"], $conn);
$provider_hash = $_COOKIE["provider_hash"];
    if($provider_hash != $provider->hash){
        header("location:login.php");
    }
}else{
	header("location:login.php");
}

if(isset($_POST["car_name"])){
   
    $service_provider = $_COOKIE["provider_id"];
    $car_name = sanitizePost($_POST['car_name']);
    $car_type = sanitizePost($_POST['car_type']);
    $seats = sanitizePost($_POST['seats']);
    $mileage = sanitizePost($_POST['mileage']);
    $luggage = sanitizePost($_POST['luggage']);
    $a_c = sanitizePost($_POST['a_c']);
    $price_per_day = sanitizePost($_POST['price_per_day']);
    $city = sanitizePost($_POST['city']);
    $country = sanitizePost($_POST['country']);
     
     
   add_rental_service($car_name, $car_type, $seats, $mileage, $luggage, $a_c, $price_per_day, $city, $country, $service_provider);
    header("location: service_provider_account.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - New Car Rental</title>

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
                        <h1>Post Car Rental</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Post Car Rental</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- login-section -->
        <section class="login-section bg-color-2">
            <div class="auto-container">
                <div class="inner-container" style="max-width:80%">
                    <div class=" ">
                        <h2>New Car Rental</h2>
                        <br>
                        <form  method="post" class="login-form">
                            <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>Car Name</label>
                                <input type="text" class="form-control" name="car_name" required="" placeholder="Enter the car name">
                            </div>
                            
                                <div class="form-group">
                                <label>Car Type</label>
                                <select type="text" class="form-control bg-white mb-2" name="car_type" required="" style="border: 1px solid #ced4da">
                                    <option value="Small">Small</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                    <option value="Estate">Estate</option>
                                    <option value="Premium">Premium</option>
                                    <option value="Minivan">Minivan</option>
                                    <option value="SUV">SUV</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Seats</label>
                                <input type="number" class="form-control" name="seats" required="" placeholder="Number of seats">
                            </div>
                            
                            <div class="form-group">
                                <label>Mileage per rental</label>
                                <input type="number" class="form-control" name="mileage" required="" placeholder="Mileage per rental">
                            </div>
                          
                            <div class="form-group">
                                <label>Price per day</label>
                                <input type="number" class="form-control" name="price_per_day" required="" step=".01" placeholder="Price per day">
                            </div>
                          
                            </div>
                                <div class="col-sm-6">
                                     <div class="form-group">
                                <label>Luggage</label>
                                <input type="number" class="form-control" name="luggage" required="" placeholder="No. of Luggage">
                            </div>
                                     <div class="form-group">
                                <label>A/C</label>
                                <select type="text" class="form-control bg-white mb-2" name="a_c" required="" style="border: 1px solid #ced4da">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                   
                                    </select>
                            </div>
                                
                             <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" name="city" required="" placeholder="City">
                            </div>                                
                             <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country" required="" placeholder="Country">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn-one">Submit</button>
                            </div>
                            
                            
                            </div>
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

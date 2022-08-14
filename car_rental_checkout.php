<?php
include 'connect.php';
include 'functions.php';
include 'service_providers.php';
include 'rental_services.php';
include 'users.php';

$cost=0;
if(isset($_POST["s"])){
$s = sanitizePost($_POST["s"]);
$service_id =$s;
$pick_up_location = sanitizePost($_POST["pick-up-location"]);
$pick_up_date = sanitizePost($_POST["pick-up-date"]);
$drop_off_location = sanitizePost($_POST["drop-off-location"]);
$drop_off_date = sanitizePost($_POST["drop-off-date"]);
    
$service = new RentalServices($service_id, $conn);
                  switch($service->car_type){
                      case "Small":
                          $car_image ="assets/images/cars/smallcar.jpg";
                          break;
                    case "Medium":
                          $car_image ="assets/images/cars/mediumcar.jpg";
                          break;
                    case "Large":
                          $car_image ="assets/images/cars/largecar.jpg";
                          break;
                    case "Minivan":
                          $car_image ="assets/images/cars/minivan.jpg";
                          break;
                    case "Premium":
                          $car_image ="assets/images/cars/premiumcar.jpg";
                          break;
                    case "Suv":
                          $car_image ="assets/images/cars/suv.jpg";
                          break;
                          
                      default:
                        $car_image = "assets/images/resource/feature-15.jpg";
                    
                      
                  }
$provider = new ServiceProviders($service->service_provider, $conn);

$date1=strtotime($pick_up_date);
$date2=strtotime($drop_off_date);
$diff=$date2-$date1;
$cost += round($diff / (60 * 60 * 24))* $service->price_per_day;
}
if(isset($_POST["s2"])){
    if(isset($_COOKIE["user_id"])){
$user = new User($_COOKIE["user_id"], $conn);
$user_hash = $_COOKIE["user_hash"];
    if($user_hash != $user->hash){
        header("location:login.php");
    }
}else{
	header("location:login.php");
}
    $s = sanitizePost($_POST["s2"]);
    $service_id = $s;
    $service = new RentalServices($service_id, $conn);
    $order_id = mt_rand(100000, 999999); 
    $user=$_COOKIE["user_id"]; 
    $service_provider = $service->service_provider; 
    $rental_service = sanitizePost($_POST["s2"]); 
    $pick_up_location = sanitizePost($_POST["pick_up_location"]);
    $pick_up_date = sanitizePost($_POST["pick_up_date"]); 
    $drop_off_location = sanitizePost($_POST["drop_off_location"]); 
    $drop_off_date = sanitizePost($_POST["drop_off_date"]);  
    $driver_email = sanitizePost($_POST["driver_email"]); 
    $driver_title = sanitizePost($_POST["driver_title"]); 
    $driver_first_name = sanitizePost($_POST["driver_first_name"]); 
    $driver_last_name = sanitizePost($_POST["driver_last_name"]); 
    $driver_phone = sanitizePost($_POST["driver_phone"]); 
    $driver_address = sanitizePost($_POST["driver_address"]); 
    $card_holder_name = sanitizePost($_POST["card_holder_name"]); 
    $card_number = sanitizePost($_POST["card_number"]); 
    $card_exp_date = sanitizePost($_POST["card_exp_date"]); 
    $card_cvc = sanitizePost($_POST["card_cvc"]);
    
    
$date1=strtotime($pick_up_date);
$date2=strtotime($drop_off_date);
$diff=$date2-$date1;
$cost += round($diff / (60 * 60 * 24))* $service->price_per_day;
        
    add_order_rental($order_id, $user, $service_provider, $rental_service, $pick_up_location, $pick_up_date, $drop_off_location, $drop_off_date, $cost, $driver_email, $driver_title, $driver_first_name, $driver_last_name, $driver_phone, $driver_address, $card_holder_name, $card_number, $card_exp_date, $card_cvc);
    
    header("location: order_confirm.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - Car Rental Checkout</title>

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


       <?php include "header.php"; ?>
        <!-- Page Title -->
        <section class="page-title style-two" style="background-image: url(carbk.jpg);">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                        <h1>Car Rental Checkout</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Car Rental Checkout</li>
                    </ul>
                </div>
              
            </div>
        </section>
        <!-- End Page Title -->


        <!-- stores-details -->
        <section class="category-details pt-5 bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar category-sidebar">
                            <div class="ads-agency sidebar-widget">
                                <div class="upper-box">
                                    <figure class="icon-box"><img src="assets/images/<?php if($provider->photo!=""){echo $provider->photo;}else{ echo "news/admin-1.png"; } ?>" alt="" style="max-width:80px; border-radius:100px;"></figure>
                                    <h4><?php echo $provider->company_name; ?></h4>
                                    <ul class="rating clearfix">
                                        <li><i class="icon-17"></i></li>
                                        <li><i class="icon-17"></i></li>
                                        <li><i class="icon-17"></i></li>
                                        <li><i class="icon-17"></i></li>
                                        <li><i class="icon-17"></i></li>
                                    </ul>
                                </div>
                                <div class="text">
                                     <div class="image-box">
                                     <div class="row">
                                     <div class="col-sm-4">
                                         
                                                <figure class="image"><img src="<?php echo $car_image; ?>" alt="" style="max-width:150px;"></figure>
                                         </div>
                                         <div class="col-sm-8">
                                         <h3 class="mt-3"><?php echo $service->car_name; ?></h3>
                                         </div>
                                    </div>
                                    </div>
                                                <div class="feature-2 mt-2">Rental features</div>
                                            
                                    <ul class="info clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i><span>Location:</span> <?php echo $service->city.", ".$service->country; ?></li>
                                        <li><i class="far fa-clock"></i><span>Member Since:</span> <?php echo $provider->date; ?></li>
                                        
                                        <li><i class="far fa-user"></i><span>Seats:</span> <?php echo $service->seats; ?></li> 
                                        <li><i class="far fa-briefcase"></i><span>Luggage:</span> <?php echo $service->luggage; ?></li>
                                        <li><i class="far fa-tachometer"></i><span>Mileage per rental:</span> <?php echo $service->mileage; ?></li>
                                        <li><i class="far fa-snowflake"></i><span>A/C:</span> <?php echo $service->a_c; ?></li>
                                         <li><i class="fa fa-credit-card"></i><span>Price per day:</span> <?php echo $service->price_per_day; ?></li>
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-side">
                       <div class="default-sidebar category-sidebar">
                            <div class="ads-agency sidebar-widget">
                           <form method="post" action="car_rental_checkout.php">
                               <input type="hidden" name="s2" value="<?php echo $s; ?>" >
                               <input type="hidden" name="pick_up_location" value="<?php echo $pick_up_location; ?>" >
                               <input type="hidden" name="pick_up_date" value="<?php echo $pick_up_date; ?>" >
                               <input type="hidden" name="drop_off_location" value="<?php echo $drop_off_location; ?>" >
                               <input type="hidden" name="drop_off_date" value="<?php echo $drop_off_date; ?>" >
                               
                           <h4>Rent this car</h4>
                               <div class="form-group mt-3">
                                   <p>
                                       <b>Pick up location: </b><?php echo $pick_up_location; ?><br>
                                       <b>Pick up date: </b><?php echo date("d-M-Y", strtotime($pick_up_date)); ?><br>
                                   <b>Drop off location:</b> <?php echo $drop_off_location; ?><br>
                                   <b>Drop off date:</b> <?php echo date("d-M-Y", strtotime($drop_off_date)); ?><br>
                                   </p>
                                   
                                   <h5 class="mt-2">Cost: <?php echo number_format($cost,2); ?></h5>
                                   <hr>
                               </div>
                               <h5 class="mb-2">Driver's Details</h5>
                               <div class="row">
                               <div class="form-group col-sm-6">
                               <label>Driver's first name</label>
                                   <input type="text" name="driver_first_name" class="form-control" placeholder="Enter driver's first name" required>
                               </div>
                               
                               <div class="form-group col-sm-6">
                               <label>Driver's last name</label>
                                   <input type="text" name="driver_last_name" class="form-control" placeholder="Driver's last name" required>
                               </div>
                               
                               <div class="form-group col-sm-6">
                               <label>Driver's Title</label>
                                   <select name="driver_title" class="form-control" required >
                                       <option value="Mr.">Mr.</option>
                                       <option value="Mrs.">Mrs.</option>
                                       <option value="Miss.">Miss.</option>
                                       <option value="Dr.">Dr.</option>
                                       <option value="Engr.">Engr.</option>
                                   </select>
                               </div>
                               
                               <div class="form-group col-sm-6">
                               <label>Driver's email</label>
                                   <input type="text" name="driver_email" class="form-control" required placeholder="Driver's Email">
                               </div>
                               
                               <div class="form-group col-sm-6">
                               <label>Driver's phone</label>
                                   <input type="text" name="driver_phone" class="form-control" required placeholder="Driver's Phone">
                               </div>
                               <div class="form-group col-sm-6">
                               <label>Driver's address</label>
                                   <input type="text" name="driver_address" class="form-control" required placeholder="Driver's address">
                               </div>
                               </div>
                               <hr>
                                <h5 class="mb-2">Card Details</h5>
                               <div class="row">
                                  
                               <div class="form-group  col-sm-6">
                               <label>Card holder name</label>
                                   <input type="text" name="card_holder_name" class="form-control" required placeholder="Card holder name">
                               </div>
                               <div class="form-group  col-sm-6">
                               <label>Card number</label>
                                   <input type="text" name="card_number" class="form-control" required placeholder="Card number">
                               </div>
                               
                               <div class="form-group  col-sm-6">
                               <label>Card expire date</label>
                                   <input type="text" name="card_exp_date" class="form-control" required placeholder="Card expire date">
                               </div>
                               
                               <div class="form-group col-sm-6">
                               <label>Card cvc</label>
                                   <input type="text" name="card_cvc" class="form-control" required placeholder="Card cvc">
                               </div>
                               </div>
                               
                               <div class="form-group mt-3">
                              <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Place order</button>
                               </div>
                               
                           </form>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- stores-details end -->


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

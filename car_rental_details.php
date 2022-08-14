<?php
include 'connect.php';
include 'functions.php';
include 'service_providers.php';
include 'rental_services.php';
include 'reviews.php';
include 'users.php';

if(isset($_GET["s"])){
$s = sanitizePost($_GET["s"]);
$service = new RentalServices($s, $conn);
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
                    case "SUV":
                          $car_image ="assets/images/cars/suv.jpg";
                          break;
                          
                      default:
                        $car_image = "assets/images/resource/feature-15.jpg";
                    
                      
                  }
$provider = new ServiceProviders($service->service_provider, $conn);
    $allreviews = get_reviews($s, "Rental");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - Car Rental Details</title>

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
                        <h1>Car Rental Details</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Car Rental Details</li>
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
                                       <?php 
                                                $get_rating = average_review($s, "Rental");
                  $rating = explode("-",$get_rating);
                                                    for($i2=0; $i2<$rating[0]; $i2++){
                                                        ?>
                                                    <li><i class="icon-17"></i></li>
                                                    <?php } ?>
                                                    <li>(<?php echo $rating[1]; ?>)</li>
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
                                         <li><i class="fa fa-credit-card"></i><span>Price per day:</span> <?php echo number_format($service->price_per_day,2); ?></li>
                                        
                                    </ul>
                                    
                                </div>
                                 <hr>
                                <div>
                                    <h5 class="mb-3">Reviews</h5>
                                <?php 
                                    for($i=0; $i<count($allreviews); $i++){
                                        $review = new Reviews($allreviews[$i], $conn);
                                        $user = new User($review->user, $conn);
                                        ?>
                                  
                                   
                                    <div class="col-sm-12">
                                        <b> <?php echo $user->first_name." ".$user->last_name; ?></b>
                                        <div class="upper-box">
                                            <figure class="icon-box"><img src="assets/images/<?php if($user->photo!=""){echo $user->photo;}else{ echo "news/admin-1.png"; } ?>" alt="" style=" border-radius:100px;"></figure>
                                        <ul class="rating">
                                         <?php 
                                                    for($i2=0; $i2<$review->rating; $i2++){
                                                        ?>
                                                    <li><i class="icon-17"></i></li>
                                                    <?php } ?>
                                                    
                                    </ul>
                                             <?php echo $review->review; ?>
                                        </div>
                                        </div>
                                    
                                    
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-side">
                       <div class="default-sidebar category-sidebar">
                            <div class="ads-agency sidebar-widget">
                           <form method="post" action="car_rental_checkout.php">
                               <input type="hidden" name="s" value="<?php echo $s; ?>" >
                           <h4>Rent this car</h4>
                               <div class="form-group mt-3">
                               <label>Pick-up location</label>
                                   <input type="text" name="pick-up-location" class="form-control" placeholder="Enter pick-up location" required>
                               </div>
                               
                               <div class="form-group mt-3">
                               <label>Pick-up date</label>
                                   <input type="date" name="pick-up-date" class="form-control" required min="<?php echo date("Y-m-d"); ?>">
                               </div>
                               
                               <div class="form-group mt-3">
                               <label>Drop-off location</label>
                                   <input type="text" name="drop-off-location" class="form-control" placeholder="Enter drop-off location" required>
                               </div>
                               
                               <div class="form-group mt-3">
                               <label>Drop off date</label>
                                   <input type="date" name="drop-off-date" class="form-control" required min="<?php echo date("Y-m-d"); ?>">
                               </div>
                               
                               <div class="form-group mt-3">
                              <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Checkout</button>
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

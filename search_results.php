<?php
include 'connect.php';
include 'functions.php';
include 'service_providers.php';
include 'mechanical_services.php';
include 'users.php';
include 'rental_services.php';

if(isset($_GET["service"])){
$s = sanitizePost($_GET["service"]);
$location = sanitizePost($_GET["location"]);
$keyword = sanitizePost($_GET["keyword"]);

    if($s=="Mechanical"){
$query2 = "SELECT * FROM mechanical_services WHERE (`title` LIKE '%".$keyword."%' AND active=1) OR (`location` LIKE '%".$location."%' AND active=1)";
		$result2 = mysqli_query($conn, $query2);
		 while($row2 = mysqli_fetch_assoc($result2)){
		$mech_services[] = $row2['id'];	 
         }
    }else
        if($s=="Car Rental"){
$query3 = "SELECT * FROM rental_services WHERE (`car_name` LIKE '%".$keyword."%' AND available=1) OR (`city` LIKE '%".$location."%' AND available=1)  OR (`country` LIKE '%".$location."%' AND available=1)";
		$result3 = mysqli_query($conn, $query3);
		 while($row3 = mysqli_fetch_assoc($result3)){
		$rental_services[] = $row3['id'];	 
         }
        }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - Search Results</title>

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
                        <h1>Search Results</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Search Results</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- category-details -->
        <section class="category-details bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar category-sidebar">
                            <div class="sidebar-search sidebar-widget">
                                <div class="widget-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="widget-content">
                                    <form class="search-form price-filter">
                                        <div class="form-group">
                                            <input type="search" name="keyword" placeholder="Search Keyword..." required="">
                                            <button type="submit"><i class="icon-2"></i></button>
                                        </div>
                                        <div class="form-group">
                                            <i class="icon-3"></i>
                                            <input type="search" name="location" placeholder="Enter Location" required="">
                                        </div>
                                        <div class="form-group">
                                            <i class="icon-4"></i>
                                            <select class="wide" name="service" required>
                                               <option data-display="Select Category">Select Service</option>
                                               <option value="Mechanical">Mechanical</option>
                                               <option value="Car Rental">Car Rental</option>
                                               
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <button type="submit" class="theme-btn-one" style="background-color: #f85c70;">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                           
                            <div class="price-filter sidebar-widget">
                                <div class="widget-title">
                                    <h3>Pricing range</h3>
                                </div>
                                <div class="price-range">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="min_price" placeholder="Min">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="max_price" placeholder="Max">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button type="submit" class="theme-btn-one">Apply price</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="category-details-content">
                            <div class="item-shorting clearfix">
                                <div class="text pull-left">
                                    <p><span>Search Results:</span> </p>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    
                                </div>
                            </div>
                            <div class="category-block wrapper list browse-add">
                                <div class="list-item feature-style-three pd-0">
                                    <?php
                                   
                                    if(@$s=="Mechanical"){
                                        if(!empty($mech_services)){
                                            for($i=0; $i<count($mech_services); $i++){
                                $service = new MechanicalServices($mech_services[$i], $conn);
                                                
                                    ?>
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image mt-5" ><img src="assets/images/cars/estatecar.jpg" alt="" style="max-width:200px;"></figure>
                                                <div class="feature-2">Featured</div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="category"><i class="fas fa-tags"></i><p>Mechanic</p></div>
                                                <h4><a href="service_details.php?s=<?php echo $mech_services[$i]; ?>"><?php echo $service->title; ?></a></h4>
                                                <ul class="rating clearfix">
                                                   <?php 
                                                $get_rating = average_review($mech_services[$i], "Mechanical");
                  $rating = explode("-",$get_rating);
                                                    for($i2=0; $i2<$rating[0]; $i2++){
                                                        ?>
                                                    <li><i class="icon-17"></i></li>
                                                    <?php } ?>
                                                    <li>(<?php echo $rating[1]; ?>)</li>
                                                </ul>
                                                <ul class="info clearfix">
                                                   
                                                    <li><i class="fas fa-map-marker-alt"></i><?php echo $service->location; ?></li>
                                                </ul>
                                                <div class="lower-box">
                                                    <h5><span>Cost:</span> $<?php echo $service->cost; ?></h5>
                                                    <ul class="react-box">
                                                        <li><a href="service_details.php?s=<?php echo $mech_services[$i]; ?>"><i class="icon-20"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btn-box"><a href="service_details.php?s=<?php echo $mech_services[$i]; ?>" class="theme-btn-one">Details</a></div>
                                        </div>
                                    </div>
                                   <?php
                                            }
                                        }else{
                                           echo "No result"; 
                                        }
                                    }else
                                        if(@$s=="Car Rental"){
                                            if(!empty($rental_services)){
                                                for($i=0; $i<count($rental_services); $i++){
                  $service = new RentalServices($rental_services[$i], $conn);
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
                                            ?>
                                      <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                               <figure class="image mt-5"><img src="<?php echo $car_image; ?>" alt="" style="max-width:200px;"></figure>
                                                <div class="feature-2">Featured</div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="category"><i class="fas fa-tags"></i><p>Car Rental</p></div>
                                                <h4><a href="car_rental_details.php?s=<?php echo $rental_services[$i]; ?>"><?php echo $service->car_name; ?></a></h4>
                                                <ul class="rating clearfix">
                                                     <?php 
                                                $get_rating = average_review($rental_services[$i], "Rental");
                  $rating = explode("-",$get_rating);
                                                    for($i2=0; $i2<$rating[0]; $i2++){
                                                        ?>
                                                    <li><i class="icon-17"></i></li>
                                                    <?php } ?>
                                                    <li>(<?php echo $rating[1]; ?>)</li>
                                                </ul>
                                                <ul class="info clearfix">
                                                    <li><i class="far fa-clock"></i><?php echo $service->date; ?></li>
                                                    <li><i class="fas fa-map-marker-alt"></i><?php echo $service->city.", ".$service->country; ?></li>
                                                </ul>
                                                <div class="lower-box">
                                                    <h5><span>Price per day:</span> $<?php echo $service->price_per_day; ?></h5>
                                                    <ul class="react-box">
                                                         <li><a href="car_rental_details.php?s=<?php echo $rental_services[$i]; ?>"><i class="icon-20"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btn-box"><a href="car_rental_details.php?s=<?php echo $rental_services[$i]; ?>" class="theme-btn-one">Details</a></div>
                                        </div>
                                    </div>
                                    <?php
                                                }
                                            }else{
                                                echo "No result"; 
                                            }
                                    }else{
                                            echo "No Search"; 
                                            }
                                    
                                        ?>
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category-details end -->


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

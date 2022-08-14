<?php
include 'connect.php';
include 'functions.php';
include 'service_providers.php';
include 'mechanical_services.php';
include 'rental_services.php';

$query2 = "SELECT * FROM mechanical_services WHERE active=1";
		$result2 = mysqli_query($conn, $query2);
		 while($row2 = mysqli_fetch_assoc($result2)){
		$mech_services[] = $row2['id'];	 
         }

$query3 = "SELECT * FROM rental_services WHERE available=1";
		$result3 = mysqli_query($conn, $query3);
		 while($row3 = mysqli_fetch_assoc($result3)){
		$rental_services[] = $row3['id'];	 
         }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer</title>

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

        <!-- banner-section -->
        <section class="banner-section style-three" style="background-image: url(carbk.jpg);">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-8 col-md-6 col-sm-12 content-column">
                        <div class="content-box">
                            <h1>Rent Cars & Find Mechanics near you</h1>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                            <h3>Find a Service</h3>
                            <form action="search_results.php" >
                                <div class="form-group">
                                    <i class="icon-2"></i>
                                    <input type="search" name="keyword" placeholder="Search Keyword..." required="">
                                </div>
                               <div class="form-group">
                                            <i class="icon-3"></i>
                                            <input type="search" name="location" placeholder="Enter Location" required="">
                                        </div>
                                        <div class="form-group">
                                            <i class="icon-4"></i>
                                            <select class="wide" name="service" required>
                                               <option data-display="Select Service">Select Service</option>
                                               <option value="Mechanical">Mechanical</option>
                                               <option value="Car Rental">Car Rental</option>
                                               
                                            </select>
                                        </div>
                               
                                <div class="form-group">
                                    <button type="submit" class="theme-btn-one"><i class="icon-2"></i>Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- process-section -->
        <section class="process-section centred sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-17.png);"></div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <span>Process</span>
                    <h2>How it Works</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor <br />incididunt labore dolore magna aliqua enim.</p>
                </div>
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <span class="count wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">01</span>
                                    <div class="text wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="fas fa-user"></i></div>
                                        <h3>Create Account</h3>
                                        <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <span class="count wow fadeInDown animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">02</span>
                                    <div class="text wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="fas fa-glass-martini"></i></div>
                                        <h3>Post Your Service</h3>
                                        <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <span class="count wow fadeInDown animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">03</span>
                                    <div class="text wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                        <h3>Sell Your Service</h3>
                                        <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process-section end -->



        <!-- feature-style-three -->
        <section class="feature-style-three">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span>Features</span>
                    <h2>Featured Services</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt labore <br />dolore magna aliqua enim.</p>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box centred">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">Car Rental &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li class="tab-btn" data-tab="#tab-2">Find Mechanics</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                  <?php
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
                                <div class="col-lg-6 col-md-12 col-sm-12 feature-block">
                                    <div class="feature-block-one wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
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
                                                    <li><a href="car_rental_details.php?s=<?php echo $rental_services[$i]; ?>">(<?php echo $rating[1]; ?>)</a></li>
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
                                        </div>
                                    </div>
                                </div>
                 <?php
              }
          }
              ?>   
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="row clearfix">
                                 <?php
          if(!empty($mech_services)){
              for($i=0; $i<count($mech_services); $i++){
                  $service = new MechanicalServices($mech_services[$i], $conn);
          ?>
                                <div class="col-lg-6 col-md-12 col-sm-12 feature-block">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box" >
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
                                                    <li><a href="service_details.php?s=<?php echo $mech_services[$i]; ?>">(<?php echo $rating[1]; ?>)</a></li>
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
                                        </div>
                                    </div>
                                </div>
                           <?php
              }
          }
                  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-three end -->



        <!-- subscribe-section -->
        <section class="subscribe-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-9.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <div class="icon-box"><i class="icon-25"></i></div>
                            <h2>Subscribe to Newsletter</h2>
                            <p>and receive new ads in inbox</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <form action="contact.html" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Inout your email address" required="">
                                <button type="submit" class="theme-btn-one">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


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

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>

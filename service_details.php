<?php
include 'connect.php';
include 'functions.php';
include 'service_providers.php';
include 'mechanical_services.php';
include 'users.php';
include 'reviews.php';

if(isset($_GET["s"])){
$s = sanitizePost($_GET["s"]);
$service = new MechanicalServices($s, $conn);
            
$provider = new ServiceProviders($service->service_provider, $conn);
$allreviews = get_reviews($s, "Mechanical");
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
    
$s2 = sanitizePost($_POST["s2"]);
$service = new MechanicalServices($s2, $conn);
    
    $order_id = mt_rand(100000, 999999); 
    $user=$_COOKIE["user_id"]; 
    $service_provider = $service->service_provider; 
    $cost = $service->cost; 
    $location = sanitizePost($_POST["location"]); 
    $card_holder_name = sanitizePost($_POST["card_holder_name"]); 
    $card_number = sanitizePost($_POST["card_number"]); 
    $card_exp_date = sanitizePost($_POST["card_exp_date"]); 
    $card_cvc = sanitizePost($_POST["card_cvc"]);
    
    
    add_order_mechanical($order_id, $user, $service_provider, $s2, $cost, $location, $card_holder_name, $card_number, $card_exp_date, $card_cvc);
    
     header("location: order_confirm.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - Mechanical Service Details</title>

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
                        <h1>Service Details</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Service Details</li>
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
                                                $get_rating = average_review($s, "Mechanical");
                  $rating = explode("-",$get_rating);
                                                    for($i2=0; $i2<$rating[0]; $i2++){
                                                        ?>
                                                    <li><i class="icon-17"></i></li>
                                                    <?php } ?>
                                                    <li>(<?php echo $rating[1]; ?>)</li>
                                    </ul>
                                </div>
                                <h4><?php echo $service->title; ?></h4>
                                <div class="text">
                                    <p><?php echo $service->description; ?></p>
                                    <ul class="info clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i><span>Location:</span> <?php echo $service->location; ?></li>
                                        <li><i class="far fa-clock"></i><span>Member Since:</span> <?php echo $provider->date; ?></li>
                                        <li><i class="far fa-credit-card"></i><span>Cost:</span> <?php echo number_format($service->cost,2); ?></li>
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
                           <form method="post">
                               <input type="hidden" name="s2" value="<?php echo $s; ?>" >
                           <h4>Order this service</h4>
                               <div class="form-group mt-3">
                               <label>Location</label>
                                   <input type="text" name="location" class="form-control" placeholder="Enter your current location" required>
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
                              <button type="submit" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Place Order</button>
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

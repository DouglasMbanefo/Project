<?php
include 'connect.php';
include 'functions.php';
include 'service_providers.php';
include 'users.php';
include 'rental_services.php';

    if(isset($_COOKIE["user_id"])){
$user = new User($_COOKIE["user_id"], $conn);
$user_hash = $_COOKIE["user_hash"];
    if($user_hash != $user->hash){
        header("location:login.php");
    }
}else{
	header("location:login.php");
}
 
if(isset($_POST["service"])){
    $s = sanitizePost($_POST["service"]); 
    $service = new RentalServices($s, $conn);
}

if(isset($_POST["rating"])){
    
    $service_provider  = sanitizePost($_POST["provider"]); 
    $service  = sanitizePost($_POST["service"]);  
    $service_type = "Rental";
    $review = sanitizePost($_POST["review"]);  
    $rating  = sanitizePost($_POST["rating"]); 
    
    
    add_review($_COOKIE["user_id"], $service_provider, $service, $service_type, $review, $rating);
    
     header("location: review_confirm.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - Review Rental</title>

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
                        <h1>Review Service</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Review Service</li>
                    </ul>
                </div>
              
            </div>
        </section>
        <!-- End Page Title -->


        <!-- stores-details -->
        <section class="category-details pt-5 bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 m-auto col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar category-sidebar">
                            <div class="ads-agency sidebar-widget">
                                
                                   <h4>Review this Service</h4>
                               
                               
                           <form method="post" enctype="multipart/form-data">
                              <input type="hidden" value="<?php echo $service->service_provider; ?>" name="provider" > 
                              <input type="hidden" value="<?php echo $s; ?>" name="service" > 
                               <div class="form-group mt-3">
                                  <h4 class="text-success">Service: <?php echo $service->car_name; ?></h4>
                               </div>
                               
                               <div class="form-group">
                               <label>Rate this service</label>
                                   <select name="rating" class="form-control" required >
                                       <option value="">Select rating</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                   </select>
                               </div>
                                <div class="form-group">
                               <label>Write a review</label>
                                    <textarea name="review" class="form-control" placeholder="write a review about this service" rows="6" required></textarea>
                               </div>
                               
                              
                               
                               <div class="form-group mt-3">
                              <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Submit</button>
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

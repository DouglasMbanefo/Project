<?php
include "connect.php";
include "functions.php";
include 'service_providers.php';
include 'mechanical_services.php';


if(isset($_COOKIE["provider_id"])){
$provider = new ServiceProviders($_COOKIE["provider_id"], $conn);
$provider_hash = $_COOKIE["provider_hash"];
    if($provider_hash != $provider->hash){
        header("location:login.php");
    }
}else{
	header("location:login.php");
}

if(isset($_POST["service_id"])){
    $service_id = sanitizePost($_POST['service_id']);
     $service = new MechanicalServices($service_id, $conn);
}

if(isset($_POST["mech_id"])){
   
    $service_id = sanitizePost($_POST['mech_id']);
    $service_provider = $_COOKIE["provider_id"];
    $location = sanitizePost($_POST['location']);
    $title = sanitizePost($_POST['title']);
    $description = sanitizePost($_POST['description']);
    $cost = sanitizePost($_POST['cost']);
     
   edit_mechanical_service($service_id, $service_provider, $location, $title, $description, $cost);
    header("location: service_provider_account.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - Edit Mechanical Service</title>

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
                        <h1>Edit Mechanical Service</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Edit Mechanical Service</li>
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
                        <h2>Edit Mechanical Service</h2>
                        <br>
                        <form  method="post" class="login-form">
                            <input type="hidden" name="mech_id" value="<?php echo $service_id; ?>" >
                            <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" required="" placeholder="Enter a title for this service" value="<?php echo $service->title; ?>">
                            </div>
                            
                                <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location" required="" placeholder="Enter a location" value="<?php echo $service->location; ?>">
                            </div>
                            <div class="form-group">
                                <label>Cost</label>
                                <input type="number" class="form-control" step=".01" name="cost" required="" placeholder="Cost of this service" value="<?php echo $service->cost; ?>">
                            </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Description</label>
                                <textarea class="form-control" rows="6" name="description" required="" placeholder="Description of this service"><?php echo $service->description; ?></textarea>
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

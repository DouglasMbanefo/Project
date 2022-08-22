<?php
include 'connect.php';
include 'functions.php';
include 'users.php';
include 'orders_mechanical.php';
include 'orders_rental.php';
include 'mechanical_services.php';
include 'rental_services.php';
include 'service_providers.php';


if(isset($_COOKIE["user_id"])){
$user = new User($_COOKIE["user_id"], $conn);
$user_hash = $_COOKIE["user_hash"];
    if($user_hash != $user->hash){
        header("location:login.php");
    }
}else{
	header("location:login.php");
}

$order_rental = sanitizePost($_POST["order_id"]);
$rental = new Orders_rental($order_rental, $conn);
                  $provider = new ServiceProviders($rental->service_provider, $conn);
                  $service = new RentalServices($rental->rental_service, $conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - My Account</title>

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

  
        <!-- login-section -->
        <section class="category-details bg-color-2" style="padding-top:20px;">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="col-sm-12"><h3>Hi, <?php echo $user->first_name; ?></h3></div><br>
               <a href="user_account.php"><i class="fa fa-arrow-left"></i> Back</a>
<h4>Car rental order details:</h4>
    <div class="table-responsive">
  <table class="table table-striped">
   
      <tbody>
         
          <tr>
          <td>Order Id:</td> <td><?php echo $rental->order_id; ?></td></tr><tr>
          <td>Service Provider:</td> <td><?php echo $provider->company_name; ?></td></tr><tr>
          <td>Service Provider Phone:</td> <td><?php echo $provider->phone; ?></td></tr><tr>
          <td>Car name:</td> <td><?php echo $service->car_name; ?></td></tr><tr>
          <td>Pick Up Location:</td> <td><?php echo $rental->pick_up_location; ?></td></tr><tr>
          <td>Pick Up Date:</td> <td><?php echo $rental->pick_up_date	; ?></td></tr><tr>
          <td>Drop Off Location:</td> <td><?php echo $rental->drop_off_location; ?></td></tr><tr>
          <td>Drop Off Date:</td> <td><?php echo $rental->drop_off_date; ?></td></tr><tr>
          <td>Driver Email:</td> <td><?php echo $rental->driver_email; ?></td></tr><tr>
          <td>Driver Title:</td> <td><?php echo $rental->driver_title; ?></td></tr><tr>
          <td>Driver First Name:</td> <td><?php echo $rental->driver_first_name; ?></td></tr><tr>
          <td>Driver Last Name:</td> <td><?php echo $rental->driver_last_name; ?></td></tr><tr>
          <td>Driver Phone:</td> <td><?php echo $rental->driver_phone; ?></td></tr><tr>
          <td>Driver Address:</td> <td><?php echo $rental->driver_address; ?></td></tr><tr>
          <td>Cost:</td> <td><?php echo number_format($rental->cost,2); ?></td></tr><tr>
          <td>Date:</td> <td><?php echo $rental->date; ?></td>
             
          </tr>
         
      </tbody>
    </table>
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

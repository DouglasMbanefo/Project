<?php
include 'connect.php';
include 'functions.php';
include 'users.php';
include 'orders_mechanical.php';
include 'orders_rental.php';
include 'mechanical_services.php';
include 'rental_services.php';
include 'service_providers.php';


if(isset($_GET["logout"])){
    logout();
    header("location: login.php");
}

if(isset($_COOKIE["user_id"])){
$user = new User($_COOKIE["user_id"], $conn);
$user_hash = $_COOKIE["user_hash"];
    if($user_hash != $user->hash){
        header("location:login.php");
    }
}else{
	header("location:login.php");
}

$query = "SELECT * FROM orders_mechanical WHERE user=".$_COOKIE["user_id"];
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
		$order_mech[] = $row['order_id'];	 
         }

$query1 = "SELECT * FROM rental_orders WHERE user=".$_COOKIE["user_id"];
		$result1 = mysqli_query($conn, $query1);
		 while($row1 = mysqli_fetch_assoc($result1)){
		$order_rental[] = $row1['order_id'];	 
         }

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

    <style>   

/* Style the tab */
.tab {
  overflow: hidden;
  
}

/* Style the buttons inside the tab */
.tab button {
  background-color: #f1f1f1;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
    border-radius: 5px 5px 0px 0px;
    border: 1px solid #ccc;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #fd7e14;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #e83e8c;
    color: #fff;
    border: 1px solid #fff;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
 
}
</style>
        <!-- login-section -->
        <section class="category-details bg-color-2" style="padding-top:20px;">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="col-sm-12"><h3>Hi, <?php echo $user->first_name; ?></h3></div><br>
                 <div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'myorders')" id="myorders_btn">My Orders</button>
  <button class="tablinks" onclick="openCity(event, 'profile')">Profile</button>
  <button class="tablinks" onclick="openCity(event, 'car_rentals')">Car Rentals</button>

</div>

<div id="myorders" class="tabcontent">
  
    <div class="table-responsive">
  <table class="table table-striped">
    <thead>
        <tr>
        <th>S/N</th>
        <th>Order Id</th>
        <th>Service</th>
        <th>Service Provider</th>
        <th>Service Provider Phone</th>
        <th>Cost</th>
        <th>Date</th>
        <th>Action</th>
        </tr>
      </thead>
      <tbody>
          <?php
          if(!empty($order_mech)){
              $sn=1;
              for($i=0; $i<count($order_mech); $i++){
                  $mech = new Orders_mechanical($order_mech[$i], $conn);
                  $provider = new ServiceProviders($mech->service_provider, $conn);
                  $service = new MechanicalServices($mech->mechanical_service, $conn);
          ?>
          <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $mech->order_id; ?></td>
          <td><?php echo $service->title; ?></td>
          <td><?php echo $provider->company_name; ?></td>
          <td><?php echo $provider->phone; ?></td>
          <td><?php echo number_format($mech->cost,2); ?></td>
          <td><?php echo $mech->date; ?></td>
              <td><form method="post" action="review_mechanical.php">
                  <input type="hidden" name="service" value="<?php echo $mech->mechanical_service; ?>">
                  <button type="submit" class="btn btn-sm btn-success">Review</button>
                  </form></td>
          </tr>
          <?php
                  $sn +=1;
              }
          }else{
              ?>
          <tr>
          <td colspan="6">No Order</td>
          </tr>
          <?php
          }
              ?>
      </tbody>
    </table>
    </div>
</div>

<div id="profile" class="tabcontent">
    <hr class="mt-0">
    <div class="row">
    <div class="lower-content col-sm-2">
                                       
 <img src="assets/images/<?php if($user->photo!=""){echo $user->photo;}else{ echo "news/admin-1.png"; } ?>" alt="" style="width: 180px; height:180px; border-radius:15px;">
        <br>
          <a href="user_edit_profile.php" class="btn btn-warning btn-sm mt-2 mb-2"><i class="fa fa-edit"></i> Edit Profile</a>
    <a href="?logout=1" class="btn btn-danger btn-sm mt-2 mb-2"><i class="fa fa-power-off"></i> Logout</a>
    </div>
    <div class="col-sm-7 table-responsive">
  <table class="table table-striped">
      <tbody>
          <tr>
              <td style="width: 150px;">First Name:</td><td> <?php echo $user->first_name; ?></td></tr><tr>
              <td>Last Name:</td><td> <?php echo $user->last_name; ?></td></tr><tr>
              <td>Email: </td><td><?php echo $user->email; ?></td></tr><tr>
              <td>Phone: </td><td><?php echo $user->phone; ?></td></tr><tr>
          <td>Address:</td><td> <?php echo $user->address; ?></td></tr>
      </tbody> 
    </table>
  
</div>
</div>
</div>
                    
<div id="car_rentals" class="tabcontent">
  
    <div class="table-responsive">
  <table class="table table-striped">
    <thead>
        <tr>
        <th>S/N</th>
        <th>Order Id</th>
        <th>Service Provider</th>
        <th>Service Provider Phone</th>
        <th>Car name</th>
        <th>Pick Up Location</th>
        <th>Pick Up Date</th>
        <th>Drop Off Location</th>
        <th>Drop Off Date</th>
        <th>Driver Email</th>
        <th>Driver Title</th>
        <th>Driver First Name</th>
        <th>Driver Last Name</th>
        <th>Driver Phone</th>
        <th>Driver Address</th>
        <th>Cost</th>
        <th>Date</th>
        <th>Action</th>
        </tr>
      </thead>
      <tbody>
          <?php
          if(!empty($order_rental)){
              $sn=1;
              for($i=0; $i<count($order_rental); $i++){
                  $rental = new Orders_rental($order_rental[$i], $conn);
                  $provider = new ServiceProviders($rental->service_provider, $conn);
                  $service = new RentalServices($rental->rental_service, $conn);
          ?>
          <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $rental->order_id; ?></td>
          <td><?php echo $provider->company_name; ?></td>
          <td><?php echo $provider->phone; ?></td>
          <td><?php echo $service->car_name; ?></td>
          <td><?php echo $rental->pick_up_location; ?></td>
          <td><?php echo $rental->pick_up_date	; ?></td>
          <td><?php echo $rental->drop_off_location; ?></td>
          <td><?php echo $rental->drop_off_date; ?></td>
          <td><?php echo $rental->driver_email; ?></td>
          <td><?php echo $rental->driver_title; ?></td>
          <td><?php echo $rental->driver_first_name; ?></td>
          <td><?php echo $rental->driver_last_name; ?></td>
          <td><?php echo $rental->driver_phone; ?></td>
          <td><?php echo $rental->driver_address; ?></td>
          <td><?php echo number_format($rental->cost,2); ?></td>
          <td><?php echo $rental->date; ?></td>
              <td><form method="post" action="review_rental.php">
                  <input type="hidden" name="service" value="<?php echo $rental->rental_service; ?>">
                  <button type="submit" class="btn btn-sm btn-success">Review</button>
                  </form></td>
          </tr>
          <?php
                  $sn +=1;
              }
          }else{
              ?>
          <tr>
          <td colspan="12">No Order</td>
          </tr>
          <?php
          }
              ?>
      </tbody>
    </table>
    </div>
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

    
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    
    
    $("#myorders_btn").click();
    
</script>
</body><!-- End of .page_wrapper -->
</html>

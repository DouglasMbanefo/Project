<?php
include 'connect.php';
include 'functions.php';
include 'service_providers.php';
include 'orders_mechanical.php';
include 'orders_rental.php';
include 'mechanical_services.php';
include 'rental_services.php';
include 'users.php';


if(isset($_GET["logout"])){
    logout();
    header("location: login.php");
}

if(isset($_COOKIE["provider_id"])){
$provider = new ServiceProviders($_COOKIE["provider_id"], $conn);
$provider_hash = $_COOKIE["provider_hash"];
    if($provider_hash != $provider->hash){
        header("location:login.php");
    }
}else{
	header("location:login.php");
}

if(isset($_POST["hide_rental_service"])){
    $service_id = sanitizePost($_POST["hide_rental_service"]);
   hide_rental_service($service_id, $_COOKIE["provider_id"]);
}

if(isset($_POST["show_rental_service"])){
    $service_id = sanitizePost($_POST["show_rental_service"]);
   show_rental_service($service_id, $_COOKIE["provider_id"]);
}

if(isset($_POST["show_mech_service"])){
    $service_id = sanitizePost($_POST["show_mech_service"]);
   show_mechanical_service($service_id, $_COOKIE["provider_id"]);
}

if(isset($_POST["hide_mech_service"])){
    $service_id = sanitizePost($_POST["hide_mech_service"]);
   hide_mechanical_service($service_id, $_COOKIE["provider_id"]);
}

$query = "SELECT * FROM orders_mechanical WHERE service_provider=".$_COOKIE["provider_id"];
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
		$order_mech[] = $row['order_id'];	 
         }

$query1 = "SELECT * FROM rental_orders WHERE service_provider=".$_COOKIE["provider_id"];
		$result1 = mysqli_query($conn, $query1);
		 while($row1 = mysqli_fetch_assoc($result1)){
		$order_rental[] = $row1['order_id'];	 
         }

$query2 = "SELECT * FROM mechanical_services WHERE service_provider=".$_COOKIE["provider_id"];
		$result2 = mysqli_query($conn, $query2);
		 while($row2 = mysqli_fetch_assoc($result2)){
		$mech_services[] = $row2['id'];	 
         }

$query3 = "SELECT * FROM rental_services WHERE service_provider=".$_COOKIE["provider_id"];
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
        
            .tablinks2{
            border: 1px solid #eee;
            border-radius: 20px;
            padding: 10px;
        }
        
        .tab2 button.active {
  background-color: orange;
    color: #fff;
   
}
</style>
        <!-- login-section -->
        <section class="category-details bg-color-2" style="padding-top:20px;">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="col-sm-12"><h3>Hi, <?php echo $provider->company_name; ?></h3></div><br>
                 <div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'myorders'); $('#mechanical_orders').click();" id="myorders_btn">Orders</button>
  <button class="tablinks" onclick="openCity(event, 'profile')" id="myprofile">Profile</button>
  <button class="tablinks" onclick="openCity(event, 'mech_services')">Mechanical Services</button>
  <button class="tablinks" onclick="openCity(event, 'rental_services')">Car Rental Services</button>

</div>

<div id="myorders" class="tabcontent">
  <hr class="mt-0">
    <div class="tab2">
    <button class="tablinks2 mb-1" onclick="openCity2(event, 'mechanicalorders')" id="mechanical_orders">Mechanical Orders</button>
  <button class="tablinks2" onclick="openCity2(event, 'rental_orders')">Car Rental Orders</button>
    </div>
    
     <div id="mechanicalorders" class="tabcontent2">
    <div class="table-responsive">
  <table class="table table-striped">
    <thead>
        <tr>
        <th>S/N</th>
        <th>Order Id</th>
        <th>Service</th>
        <th>User</th>
        <th>User Phone</th>
        <th>Cost</th>
        <th>Date</th>
        </tr>
      </thead>
      <tbody>
          <?php
          if(!empty($order_mech)){
              $sn=1;
              for($i=0; $i<count($order_mech); $i++){
                  $mech = new Orders_mechanical($order_mech[$i], $conn);
                  $user = new User($mech->user, $conn);
                  $service = new MechanicalServices($mech->mechanical_service, $conn);
          ?>
          <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $mech->order_id; ?></td>
          <td><?php echo $service->title; ?></td>
          <td><?php echo $user->first_name." ".$user->last_name; ?></td>
          <td><?php echo $user->phone; ?></td>
          <td><?php echo number_format($mech->cost,2); ?></td>
          <td><?php echo $mech->date; ?></td>
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
    
    <div id="rental_orders" class="tabcontent2">
          <div class="table-responsive">
  <table class="table table-striped">
    <thead>
        <tr>
        <th>S/N</th>
        <th>Order Id</th>
        <th>User</th>
        <th>Service</th>
        <th>Cost</th>
        <th>Date</th>
        <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php
          if(!empty($order_rental)){
              $sn=1;
              for($i=0; $i<count($order_rental); $i++){
                  $rental = new Orders_rental($order_rental[$i], $conn);
                  $user = new User($rental->user, $conn);
                  $service = new RentalServices($rental->rental_service, $conn);
          ?>
          <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $rental->order_id; ?></td>
          <td><?php echo $user->first_name; ?></td>
          <td><?php echo $service->car_name; ?></td>
          <td><?php echo number_format($mech->cost,2); ?></td>
          <td><?php echo $rental->date; ?></td>
              <td><form method="post" action="rental_order_details_service_provider.php">
                  <input type="hidden" name="order_id" value="<?php echo $rental->order_id; ?>">
                  <button type="submit" class="btn btn-sm btn-info mb-2">Order Details</button>
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

<div id="profile" class="tabcontent">
    <div class="row">
    <div class="lower-content col-sm-2">
                                       
 <img src="assets/images/<?php if($provider->photo!=""){echo $provider->photo;}else{ echo "news/admin-1.png"; } ?>" alt="" style="width: 180px; height:180px; border-radius:15px;"><br>
        
         <a href="service_provider_edit_profile.php" class="btn btn-warning mt-2 mb-2 btn-sm"><i class="fa fa-edit"></i> Edit Profile</a>
    <a href="?logout" class="btn btn-danger mt-2 mb-2 btn-sm"><i class="fa fa-power-off"></i> Logout</a>
    </div>
   
    <div class="col-sm-10 table-responsive">
  <table class="table table-striped">
      <tbody>
          <tr>
              <td style="width: 150px;">Company Name:</td><td> <?php echo $provider->company_name; ?></td><td>Bank:</td><td><?php echo $provider->bank; ?></td></tr><tr>
              <td>Email: </td><td><?php echo $provider->email; ?></td><td>Bank Account Number:</td><td><?php echo $provider->bank_account_no; ?></td></tr><tr>
              <td>Phone: </td><td><?php echo $provider->phone; ?></td><td>Bank Account Name:</td><td><?php echo $provider->bank_account_name; ?></td></tr><tr>
          <td>Address:</td><td> <?php echo $provider->address; ?></td></tr>
      </tbody> 
    </table>
   
</div>
</div>
</div>
                     
<div id="rental_services" class="tabcontent">
  
    <div class="table-responsive">
  <table class="table table-striped">
    <thead>
        <tr>
        <th>S/N</th>
        <th>Car name</th>
        <th>Car type</th>
        <th>No. of seats</th>
        <th>Mileage per rental</th>
        <th>No. of luggage</th>
        <th>A/C</th>
        <th>Price per day</th>
        <th>City</th>
        <th>Country</th>
        <th>Date</th>
        <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php
          if(!empty($rental_services)){
              $sn=1;
              for($i=0; $i<count($rental_services); $i++){
                  $service = new RentalServices($rental_services[$i], $conn);
          ?>
          <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $service->car_name; ?></td>
          <td><?php echo $service->car_type; ?></td>
          <td><?php echo $service->seats; ?></td>
          <td><?php echo $service->mileage; ?></td>
          <td><?php echo $service->luggage; ?></td>
          <td><?php echo $service->a_c; ?></td>
          <td><?php echo number_format($service->price_per_day,2); ?></td>
          <td><?php echo $service->city; ?></td>
          <td><?php echo $service->country; ?></td>
          <td><?php echo $service->date; ?></td>
              <td><form method="post" action="edit_car_rental.php">
                  <input type="hidden" name="service_id" value="<?php echo $rental_services[$i]; ?>" >
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</button>
                </form>
              
                  <?php 
                  if($service->available==1){
                    ?>
                  <form method="post">
                  <input type="hidden" name="hide_rental_service" value="<?php echo $rental_services[$i]; ?>" >
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-eye-slash"></i> Hide</button>
                </form>
                  <?php
                  }else{
                      ?>
                   <form method="post">
                  <input type="hidden" name="show_rental_service" value="<?php echo $rental_services[$i]; ?>" >
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Show</button>
                </form>
                  <?php
                  }
                  ?>
              </td>
          </tr>
          <?php
                  $sn +=1;
              }
          }else{
              ?>
          <tr>
          <td colspan="12">No Rental Service</td>
          </tr>
          <?php
          }
              ?>
      </tbody>
    </table>
    </div>
</div>

<div id="mech_services" class="tabcontent">
  
    <div class="table-responsive">
  <table class="table table-striped">
    <thead>
        <tr>
        <th>S/N</th>
        <th>Title</th>
        <th>Location</th>
        <th>Description</th>
        <th>Cost</th>
        <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          <?php
          if(!empty($mech_services)){
              $sn=1;
              for($i=0; $i<count($mech_services); $i++){
                  $service = new MechanicalServices($mech_services[$i], $conn);
          ?>
          <tr>
          <td><?php echo $sn; ?></td>
          <td><?php echo $service->title; ?></td>
          <td><?php echo $service->location; ?></td>
          <td><?php echo $service->description; ?></td>
          <td><?php echo number_format($service->cost,2); ?></td>
            <td><form method="post" action="edit_mechanical_service.php">
                  <input type="hidden" name="service_id" value="<?php echo $mech_services[$i]; ?>" >
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</button>
                </form>
                
                <?php
                  if($service->active==1){
                      ?>
                <form method="post" >
                  <input type="hidden" name="hide_mech_service" value="<?php echo $mech_services[$i]; ?>" >
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-eye-slash"></i> Hide</button>
                </form>
                <?php
                  }else{
                      ?>
                <form method="post" >
                  <input type="hidden" name="show_mech_service" value="<?php echo $mech_services[$i]; ?>" >
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Show</button>
                </form>
                <?php
                  }
                  ?>
                </td>
          </tr>
          <?php
                  $sn +=1;
              }
          }else{
              ?>
          <tr>
          <td colspan="6">No Mechanical Service</td>
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
    
     
    
function openCity2(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent2");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks2");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    
    
    
   $("#myprofile").click();
    
</script>
</body><!-- End of .page_wrapper -->
</html>

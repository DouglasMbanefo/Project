<?php

function hashPassword($password){
	//this function utilises bcrypt to hash the password for security
	$hashedPass = password_hash($password, PASSWORD_DEFAULT);
	return $hashedPass;
}

function sanitizePost($post_data){
	//sanitize post content
	include "connect.php";
	$post_data = strip_tags(htmlspecialchars(trim($post_data)));
	$post_data = mysqli_real_escape_string($conn,$post_data);
	return $post_data;
}

//login function for users
function user_login($email, $password){
	include "connect.php";
    
	$email = sanitizePost($email);
	$password = sanitizePost($password);
	if($email=='' || $password==''){
		 exit();
	}
		
		$query = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
		$hashed_pass[] = $row['password'];
			 $user_id[]= $row["id"];
			 
         }
if(password_verify($password, @$hashed_pass[0])){ 
    
		setcookie("user_id", $user_id[0], time() + 86400, "/");
        setcookie("user_hash", $hashed_pass[0], time() + 86400, "/");
    
    // logout service provider account
     setcookie("provider_id", "", time() - 86400, "/");
        setcookie("provider_hash", "", time() - 86400, "/");
   
      return "true"; 
    }else{
			
return "Email or Password not correct";
		}
}

//login function for users
function provider_login($email, $password){
	include "connect.php";
    
	$email = sanitizePost($email);
	$password = sanitizePost($password);
	if($email=='' || $password==''){
		 exit();
	}
		
		$query = "SELECT * FROM service_providers WHERE email='$email'";
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
		$hashed_pass[] = $row['password'];
			 $provider_id[]= $row["id"];
			 
         }
if(password_verify($password, @$hashed_pass[0])){ 
    
		setcookie("provider_id", $provider_id[0], time() + 86400, "/");
        setcookie("provider_hash", $hashed_pass[0], time() + 86400, "/");
    
    //logout regular user account
     setcookie("user_id", "", time() - 86400, "/");
        setcookie("user_hash", "", time() - 86400, "/");
   
      return "true"; 
    }else{
			
return "Email or Password not correct";
		}
}

function logout(){
    setcookie("user_id", "", time() - 86400, "/");
        setcookie("user_hash", "", time() - 86400, "/");
    
     setcookie("provider_id", "", time() - 86400, "/");
        setcookie("provider_hash", "", time() - 86400, "/");
}

//Function to check if user already exists
function check_user($email){
    include "connect.php";
    $query = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
		$hashed_pass[] = $row['password'];
			 $user_id[]= $row["id"]; 
         }
    if(!empty($user_id)){
        return $user_id[0];
    }else{
        return "";
    }
}

//Function to check if service provider already exists
function check_service_provider($email){
    include "connect.php";
    $query = "SELECT * FROM service_providers WHERE email='$email'";
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
		$hashed_pass[] = $row['password'];
			 $user_id[]= $row["id"]; 
         }
    if(!empty($user_id)){
        return $user_id[0];
    }else{
        return "";
    }
}


// function to add new user
function user_registration($first_name, $last_name, $email, $phone, $password, $address)
    	{
			include "connect.php";
          $dt = date("d-M-Y");  
    $sql = "INSERT INTO users (first_name, last_name, email, phone, password, address, date) VALUES('$first_name', '$last_name', '$email', '$phone', '$password', '$address', '$dt')";
    $querygn = mysqli_query($conn,$sql);
			
    	}


// function to add new service provider
function service_provider_registration($company_name, $address, $email, $phone, $password)
    	{
			include "connect.php"; 
            $dt = date("d-M-Y");  
    $sql = "INSERT INTO service_providers (company_name, address, email, phone, password, date) VALUES('$company_name', '$address', '$email', '$phone', '$password', '$dt')";
    $querygn = mysqli_query($conn,$sql);
			
    	}

// function to add new mechanic service
function add_mechanical_service($service_provider, $location, $title, $description, $cost)
    	{
			include "connect.php"; 
    $sql = "INSERT INTO mechanical_services (service_provider, location, title, description, cost, active) VALUES('$service_provider', '$location', '$title', '$description', '$cost', '1')";
    $querygn = mysqli_query($conn,$sql);
			
    	}

// function to add rental service
function add_rental_service($car_name, $car_type, $seats, $mileage, $luggage, $a_c, $price_per_day, $city, $country, $service_provider)
    	{
			include "connect.php";
            $dt= date("d-M-Y");
    $sql = "INSERT INTO rental_services (car_name, car_type, seats, mileage, luggage, a_c, price_per_day, city, country, service_provider, available, date) VALUES('$car_name', '$car_type', '$seats', '$mileage', '$luggage', '$a_c', '$price_per_day', '$city', '$country', '$service_provider', '1', '$dt')";
    $querygn = mysqli_query($conn,$sql);
			
    	}

// function to add mechanical orders
function add_order_mechanical($order_id, $user, $service_provider, $mechanical_service, $cost, $card_holder_name, $card_number, $card_exp_date, $card_cvc)
    	{
			include "connect.php";
            $dt= date("d-M-Y");
    $sql = "INSERT INTO orders_mechanical (order_id, user, service_provider, mechanical_service, cost, card_holder_name, card_number, card_exp_date, card_cvc, date) VALUES('$order_id', '$user', '$service_provider', '$mechanical_service', '$cost', '$card_holder_name', '$card_number', '$card_exp_date', '$card_cvc', '$dt')";
    $querygn = mysqli_query($conn,$sql);
			
    	}

// function to add rental orders
function add_order_rental($order_id, $user, $service_provider, $rental_service, $pick_up_location, $pick_up_date, $drop_off_location, $drop_off_date, $cost, $driver_email, $driver_title, $driver_first_name, $driver_last_name, $driver_phone, $driver_address, $card_holder_name, $card_number, $card_exp_date, $card_cvc)
    	{
			include "connect.php";
            $dt= date("d-M-Y");
    $sql = "INSERT INTO rental_orders (order_id, user, service_provider, rental_service, pick_up_location, pick_up_date, drop_off_location, drop_off_date, cost, driver_email, driver_title, driver_first_name, driver_last_name, driver_phone, driver_address, card_holder_name, card_number, card_exp_date, card_cvc, date) VALUES('$order_id', '$user', '$service_provider', '$rental_service', '$pick_up_location', '$pick_up_date', '$drop_off_location', '$drop_off_date', '$cost', '$driver_email', '$driver_title', '$driver_first_name', '$driver_last_name', '$driver_phone', '$driver_address', '$card_holder_name', '$card_number', '$card_exp_date', '$card_cvc', '$dt')";
    $querygn = mysqli_query($conn,$sql);
			
    	}

// function to add user reviews
function add_review($user, $service_provider, $service, $service_type, $review, $rating)
    	{
			include "connect.php";
            $dt= date("d-M-Y");
    $sql = "INSERT INTO reviews (user, service_provider, service, service_type, review, rating, date) VALUES('$user', '$service_provider', '$service', '$service_type', '$review', '$rating', '$dt')";
    $querygn = mysqli_query($conn,$sql);
			
    	}

?>
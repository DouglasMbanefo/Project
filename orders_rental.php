<?php

class Orders_rental{
    
    public $order_id;
    public $user;
    public $service_provider;
    public $rental_service;
    public $pick_up_location;
    public $pick_up_date;
    public $drop_off_location;
    public $drop_off_date;
    public $cost;
    public $driver_email;
    public $driver_title;
    public $driver_first_name;
    public $driver_last_name;
    public $driver_phone;
    public $driver_address;
    public $card_holder_name;
    public $card_number;
    public $card_exp_date;
    public $card_cvc;
    public $date;
    
    function __construct($order_id, $conn) {
        
        $query = "SELECT * FROM rental_orders WHERE order_id='".$order_id."'";
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
			 $order_id[]= $row["order_id"];
			 $user[]= $row["user"];
			 $service_provider[]= $row["service_provider"];
			 $rental_service[]= $row["rental_service"];
			 $pick_up_location[]= $row["pick_up_location"];
			 $pick_up_date[]= $row["pick_up_date"];
			 $drop_off_location[]= $row["drop_off_location"];
			 $drop_off_date[]= $row["drop_off_date"];
			 $driver_email[]= $row["driver_email"];
			 $driver_title[]= $row["driver_title"];
			 $driver_first_name[]= $row["driver_first_name"];
			 $driver_last_name[]= $row["driver_last_name"];
			 $driver_phone[]= $row["driver_phone"];
			 $driver_address[]= $row["driver_address"];
			 $cost[]= $row["cost"];
			 $card_holder_name[]= $row["card_holder_name"];
			 $card_number[]= $row["card_number"];
			 $card_exp_date[]= $row["card_exp_date"];
			 $card_cvc[]= $row["card_cvc"];
			 $date[]= $row["date"];
			
         }
        if(!empty($order_id)){
        $this->order_id = $order_id[0];
        $this->user = $user[0];
        $this->service_provider = $service_provider[0];
        $this->rental_service = $rental_service[0];
        $this->pick_up_location = $pick_up_location[0];
        $this->pick_up_date = $pick_up_date[0];
        $this->drop_off_location = $drop_off_location[0];
        $this->drop_off_date = $drop_off_date[0];
        $this->driver_email = $driver_email[0];
        $this->driver_title = $driver_title[0];
        $this->driver_first_name = $driver_first_name[0];
        $this->driver_last_name = $driver_last_name[0];
        $this->driver_phone = $driver_phone[0];
        $this->driver_address = $driver_address[0];
        $this->cost = $cost[0];
        $this->card_holder_name = $card_holder_name[0];
        $this->card_number = $card_number[0];
        $this->card_holder_name = $card_holder_name[0];
        $this->card_exp_date = $card_exp_date[0];
        $this->card_cvc = $card_cvc[0];
        $this->date = $date[0];
        
        }
    }
}
?>
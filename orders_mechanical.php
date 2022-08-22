<?php

class Orders_mechanical{
    
    public $order_id;
    public $user;
    public $service_provider;
    public $mechanical_service;
    public $cost;
    public $card_holder_name;
    public $card_number;
    public $card_exp_date;
    public $card_cvc;
    public $date;
    
    function __construct($order_id2, $conn) {
        
        $query = "SELECT * FROM orders_mechanical WHERE order_id='".$order_id2."'";
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
			 $order_id[]= $row["order_id"];
			 $user[]= $row["user"];
			 $service_provider[]= $row["service_provider"];
			 $mechanical_service[]= $row["mechanical_service"];
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
        $this->mechanical_service = $mechanical_service[0];
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
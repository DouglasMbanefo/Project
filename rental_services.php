<?php

class RentalServices{
    
    public $car_name;
    public $car_type;
    public $seats;
    public $mileage;
    public $luggage;
    public $a_c;
    public $price_per_day;
    public $city;
    public $country;
    public $service_provider;
    public $available;
    public $date;
  
    
    function __construct($service_id, $conn) {
        
        $query = "SELECT * FROM rental_services WHERE id=".$service_id;
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
			 $car_name[]= $row["car_name"];
			 $car_type[]= $row["car_type"];
			 $seats[]= $row["seats"];
			 $mileage[]= $row["mileage"];
			 $luggage[]= $row["luggage"];
			 $a_c[]= $row["a_c"];
			 $price_per_day[]= $row["price_per_day"];
			 $city[]= $row["city"];
			 $country[]= $row["country"];
			 $service_provider[]= $row["service_provider"];
			 $available[]= $row["available"];
			 $date[]= $row["date"];
			
         }
        if(!empty($car_name)){
        $this->car_name = $car_name[0];
        $this->car_type = $car_type[0];
        $this->seats = $seats[0];
        $this->mileage = $mileage[0];
        $this->luggage = $luggage[0];
        $this->a_c = $a_c[0];
        $this->price_per_day = $price_per_day[0];
        $this->city = $city[0];
        $this->country = $country[0];
        $this->service_provider = $service_provider[0];
        $this->available = $available[0];
        $this->date = $date[0];
        
        }
    }
}
?>
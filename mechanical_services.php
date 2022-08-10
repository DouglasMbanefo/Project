<?php

class MechanicalServices{
    
    public $service_provider;
    public $location;
    public $title;
    public $description;
    public $cost;
    public $active;
  
    
    function __construct($service_id, $conn) {
        
        $query = "SELECT * FROM mechanical_services WHERE id=".$service_id;
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
			 $service_provider[]= $row["service_provider"];
			 $location[]= $row["location"];
			 $title[]= $row["title"];
			 $description[]= $row["description"];
			 $cost[]= $row["cost"];
			 $active[]= $row["active"];
			
         }
        if(!empty($service_provider)){
        $this->service_provider = $service_provider[0];
        $this->location = $location[0];
        $this->title = $title[0];
        $this->description = $description[0];
        $this->cost = $cost[0];
        $this->active = $active[0];
        
        }
    }
}
?>
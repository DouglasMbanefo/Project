<?php

class Reviews{
    
    public $user;
    public $service_provider;
    public $service;
    public $service_type;
    public $review;
    public $rating;
    public $date;
    
    function __construct($review_id, $conn) {
        
        $query = "SELECT * FROM reviews WHERE id=".$review_id;
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
			 $user[]= $row["user"];
			 $service_provider[]= $row["service_provider"];
			 $service[]= $row["service"];
			 $service_type[]= $row["service_type"];
			 $review[]= $row["review"];
			 $rating[]= $row["rating"];
			 $date[]= $row["date"];
			
         }
        if(!empty($user)){
        $this->user = $user[0];
        $this->service_provider = $service_provider[0];
        $this->service = $service[0];
        $this->service_type = $service_type[0];
        $this->review = $review[0];
        $this->rating = $rating[0];
        $this->date = $date[0];
        
        }
    }
}
?>
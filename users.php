<?php

class User{
    
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $hash;
    public $address;
    public $photo;
    public $date;
    
    function __construct($user_id, $conn) {
        
        $query = "SELECT * FROM users WHERE id=".$user_id;
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
			 $first_name[]= $row["first_name"];
			 $last_name[]= $row["last_name"];
			 $email[]= $row["email"];
			 $phone[]= $row["phone"];
			 $hash[]= $row["password"];
			 $address[]= $row["address"];
			 $photo[]= $row["photo"];
			 $date[]= $row["date"];
			
         }
        if(!empty($first_name)){
        $this->first_name = $first_name[0];
        $this->last_name = $last_name[0];
        $this->email = $email[0];
        $this->phone = $phone[0];
        $this->hash = $hash[0];
        $this->address = $address[0];
        $this->photo = $photo[0];
        $this->date = $date[0];
        
        }
    }
}
?>
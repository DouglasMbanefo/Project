<?php

class ServiceProviders{
    
    public $company_name;
    public $address;
    public $email;
    public $phone;
    public $photo;
    public $password;
    public $bank_account_no;
    public $bank_account_name;
    public $bank;
  
    
    function __construct($provider_id, $conn) {
        
        $query = "SELECT * FROM service_providers WHERE id=".$provider_id;
		$result = mysqli_query($conn, $query);
		 while($row = mysqli_fetch_assoc($result)){
			 $company_name[]= $row["company_name"];
			 $address[]= $row["address"];
			 $email[]= $row["email"];
			 $phone[]= $row["phone"];
			 $phone[]= $row["photo"];
			 $password[]= $row["password"];
			 $bank_account_no[]= $row["bank_account_no"];
			 $bank_account_name[]= $row["bank_account_name"];
			 $bank[]= $row["bank"];
			
         }
        if(!empty($company_name)){
        $this->company_name = $company_name[0];
        $this->address = $address[0];
        $this->email = $email[0];
        $this->phone = $phone[0];
        $this->photo = $photo[0];
        $this->password = $password[0];
        $this->bank_account_no = $bank_account_no[0];
        $this->bank_account_name = $bank_account_name[0];
        $this->bank = $bank[0];
        
        }
    }
}
?>
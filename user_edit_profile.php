<?php
include 'connect.php';
include 'functions.php';
include 'service_providers.php';
include 'users.php';

    if(isset($_COOKIE["user_id"])){
$user = new User($_COOKIE["user_id"], $conn);
$user_hash = $_COOKIE["user_hash"];
    if($user_hash != $user->hash){
        header("location:login.php");
    }
}else{
	header("location:login.php");
}
 
if(isset($_POST["first_name"])){
    
    $first_name = sanitizePost($_POST["first_name"]); 
    $last_name = sanitizePost($_POST["last_name"]); 
    $phone = sanitizePost($_POST["phone"]); 
    $address = sanitizePost($_POST["address"]); 
    $photo = $user->photo;
    
    if(@getimagesize($_FILES["photo"]['tmp_name'])){
    $file_name=$_FILES['photo']['name'];
    $temp_name = $_FILES['photo']['tmp_name'];
    $target_dir = "assets/images/";
    $photo= imageUpload($file_name, $temp_name, $target_dir);
    }
    
    edit_profile_user($_COOKIE["user_id"], $first_name, $last_name, $phone, $address, $photo);
    
     header("location: user_account.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Mechailer - Edit Profile</title>

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


       <?php include "header.php"; ?>
        <!-- Page Title -->
        <section class="page-title style-two" style="background-image: url(carbk.jpg);">
            <div class="auto-container">
                <div class="content-box centred mr-0">
                    <div class="title">
                        <h1>Edit Profile</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Edit Profile</li>
                    </ul>
                </div>
              
            </div>
        </section>
        <!-- End Page Title -->


        <!-- stores-details -->
        <section class="category-details pt-5 bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 m-auto col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar category-sidebar">
                            <div class="ads-agency sidebar-widget">
                                
                                   <h4>Edit Profile</h4>
                               
                               
                           <form method="post" enctype="multipart/form-data">
                               
                               <div class="form-group mt-3">
                                   <img src="assets/images/<?php if($user->photo!=""){echo $user->photo;}else{ echo "news/admin-1.png"; } ?>" alt="" style="max-width:80px; height:80px; border-radius:100px;">
                               </div>
                               <div class="row">
                               <div class="form-group col-sm-6">
                               <label>First Name</label>
                                   <input type="text" name="first_name" class="form-control" placeholder="Enter your first name" required value="<?php echo $user->first_name; ?>">
                               </div>
                                <div class="form-group col-sm-6">
                               <label>Last Name</label>
                                   <input type="text" name="last_name" class="form-control" placeholder="Enter your last name" required value="<?php echo $user->last_name; ?>">
                               </div>
                               
                               <div class="form-group col-sm-6">
                               <label>Address</label>
                                   <input type="text" name="address" class="form-control" placeholder="Enter your address" required value="<?php echo $user->address; ?>">
                               </div>
                               
                               <div class="form-group col-sm-6">
                               <label>Phone</label>
                                   <input type="text" name="phone" class="form-control" placeholder="Enter phone" required value="<?php echo $user->phone; ?>">
                               </div>
                               
                               <div class="form-group col-sm-6">
                               <label>Upload Photo</label>
                                   <input type="file" name="photo" class="form-control">
                               </div>
                               </div>
                               
                               <div class="form-group mt-3">
                              <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Save</button>
                               </div>
                           </form>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- stores-details end -->


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

</body><!-- End of .page_wrapper -->
</html>

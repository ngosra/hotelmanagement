<?php
session_start();
require 'connection.php';
if(isset($_POST['signin'])){
	 if($_POST['role']=='manager'){
	 	   $staffid= $_POST['staffid'];
           $password= $_POST['password'];
           $role=$_POST['role'];
           $sql="SELECT * FROM admin where StaffID ='$staffid' AND Password='$password' AND Role='$role'";
           $result=mysqli_query($connection,$sql);
           $count=mysqli_num_rows($result);
           if($count==1){
           	while(mysql_fetch_row($result)){
           	 $managerID =$row['ID'];
           	}
           	$_SESSION['ID']=$managerID;
            $_SESSION['role']='manager';
           	header("location:admin/manager_home.php");

           }
	 //}
	  
	 else{
	 	 $fmsg="wrong credentials;username or password incorrect";
	 }
	}elseif($_POST['role']=='receptionist'){
		$staffid= $_POST['staffid'];
           $password= $_POST['password'];
           $role=$_POST['role'];
           $sql="SELECT * FROM admin where StaffID ='$staffid' AND Password='$password' AND Role='$role'";
           $result=mysqli_query($connection,$sql);
           $count=mysqli_num_rows($result);
           if($count==1){
           	while(mysql_fetch_row($result)){
           	 $receptionistID=$row['ID'];
           	}
           	$_SESSION['ID']=$receptionistID;
           	$_SESSION['role']='receptionist';

           	header("location:admin/receptionist_home.php");

           }
            else{
	 	 $fmsg="wrong credentials;username or password incorrect";
	 }
	}elseif($_POST['role']=='restaurant'){
        $staffid= $_POST['staffid'];
           $password= $_POST['password'];
           $role=$_POST['role'];
           $sql="SELECT * FROM admin where StaffID ='$staffid' AND Password='$password' AND Role='$role'";
           $result=mysqli_query($connection,$sql);
           $count=mysqli_num_rows($result);
           if($count==1){
           	   while(mysql_fetch_row($result)){
           	       $restaurantID =$row['ID'];
           	    }
           	    $_SESSION['ID']=$restaurantID;
           	    $_SESSION['role']='restaurant';

           	    header("location:admin/restaurant_home.php");
            }
            else{
	 	         $fmsg="wrong credentials;username or password incorrect";
	        }
	}elseif ($_POST['role']=='gym') {
        	$staffid= $_POST['staffid'];
           $password= $_POST['password'];
           $role=$_POST['role'];
           $sql="SELECT * FROM admin where StaffID ='$staffid' AND Password='$password' AND Role='$role'";
           $result=mysqli_query($connection,$sql);
           $count=mysqli_num_rows($result);
           if($count==1){
           	while(mysql_fetch_row($result)){
           	 $gymID =$row['ID'];
           	}
           	$_SESSION['ID']=$gymID;
           	$_SESSION['role']='gym';

           	header("location:admin/gym_home.php");

           }
            else{
	 	 $fmsg="wrong credentials;username or password incorrect";
	 }
	}
}

?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>HOTEL MANAGEMENT SYSTEM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="POST">
					 <?php if(isset($fmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fmsg;?></div><?php } ?>
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter StaffID">
						<input class="input100" type="text" name="staffid" placeholder="StaffID">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div  class="container" style="margin:20px">
                        <select class="form-control" name="role">
                             <option selected>Choose A Role</option>
                             <option value="manager">Manager</option>
                             <option value="receptionist">Receptionist</option>
                             <option value="restaurant">Restaurant</option>
                             <option value="gym">Gym</option>
                             </select>
         
                    </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="signin">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
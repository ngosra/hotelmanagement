<?php
session_start();
require 'connection.php';
if(isset($_POST['sigin'])){
	 //if($_POST['role']=='manager'){
	 	       $staffid= $_POST['staffid'];
           $password= $_POST['password'];
           $role=$_POST['role'];
           $sql="SELECT * FROM admin where StaffID ='$staffid' AND Password='$password' AND Role='$role'";
           $result=mysqli_query($connection,$sql);
           $count=mysqli_num_rows($result);
           if($count==1){
           	while(mysql_fetch_row($result)){
           		$_SESSION['ID']=$ManagerID;
           	}
           	header("location:manager_home.php");

           }
	 }/*
	 elseif($_POST['role']=='receptionist'){
	 	 $staffid= $_POST['staffid'];
           $password= $_POST['password'];
           $role=$_POST['role'];
           $sql="SELECT * FROM admin where StaffID ='$staffid' AND Password='$password' AND Role='$role'";
           $result=mysqli_query($connection,$sql);
           $count=mysqli_num_rows($result);
           if($count==1){
           	while(mysql_fetch_row($result)){
           		$_SESSION['ID']=$ReceptionistID;
           	}
           	header("location:receptionist_home.php");
           }
	 }elseif ($_POST['role']=='restaurant') {
	 	     $staffid= $_POST['staffid'];
           $password= $_POST['password'];
           $role=$_POST['role'];
           $sql="SELECT * FROM admin where StaffID ='$staffid' AND Password='$password' AND Role='$role'";
           $result=mysqli_query($connection,$sql);
           $count=mysqli_num_rows($result);
           if($count==1){
           	while(mysql_fetch_row($result)){
           		$_SESSION['ID']=$RestaurantID;
           	}
           	header("location:restaurant_home.php");
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
           		$_SESSION['ID']=$GymID;
           	}
           	header("location:gym_home.php");
           }
	 }*/else{
	 	 $fmsg="wrong credentials;username or password incorrect";
	 }
//}

?>
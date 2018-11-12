<?php 
$connection=mysqli_connect("localhost","root","");

if(!$connection)
{

die("Database not connected :".mysqli_error());
}
$db_select=mysqli_select_db($connection, "hms");
if(!$db_select)
{
die(mysqli_error());
}
<?php
session_start();




include('connect_db.php');

// get results from database

 $sql = "UPDATE user SET 
firstname= '".$_POST["firstname"]."'	,
lastname = '".$_POST["lastname"]."',
password = '".$_POST["pass"]."',
address = '".$_POST["address"]."',
email = '".$_POST["email"]."',
age = '".$_POST["age"]."',
status ='".$_POST["stat"]."',
education ='".$_POST["education"]."',
tel = '".$_POST["tel"]."'
WHERE uid = '".$_SESSION["u_id"]."' ";

 

$query = mysqli_query($conn,$sql);

 

if($query) {
	

	header("location:tea.php");

}

 

mysqli_close($conn);
?>
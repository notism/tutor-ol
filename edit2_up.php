<?php
session_start();


if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"images/".$_FILES["filUpload"]["name"])){

// connect to the database
include('connect_db.php');

// get results from database

 $sql = "UPDATE user SET 
firstname= '".$_POST["firstname"]."'	,
lastname = '".$_POST["lastname"]."',
password = '".$_POST["pass"]."',
address = '".$_POST["address"]."',
email = '".$_POST["email"]."',
age = '".$_POST["age"]."',
photo ='".$_FILES["filUpload"]["name"]."',
education = '".$_POST["education"]."',
tel = '".$_POST["tel"]."'
WHERE username = '".$_POST['username']."' ";

 

$query = mysqli_query($conn,$sql);

 

if($query) {
	

	header("location:index_a.php");

}
}
 

mysqli_close($conn);
?>
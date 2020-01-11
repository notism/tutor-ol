<?php
session_start();



if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"images/".$_FILES["filUpload"]["name"])){
// connect to the database
include('connect_db.php');

// get results from database

$sql = "UPDATE courses SET 
c_name= '".$_POST["name"]."'	,
c_detail = '".$_POST["detail"]."',
regis = '".$_POST["regis"]."',
php = '".$_POST["php"]."',

teac = '".$_POST["t_name"]."',
image ='".$_FILES["filUpload"]["name"]."',
dephp = '".$_POST["dephp"]."'
WHERE course_id = '".$_SESSION["c_id_by_ad"]."' ";

 

$query = mysqli_query($conn,$sql);

 

if($query) {
	

	header("location:addclass_ad.php");

}

} 

mysqli_close($conn);
?>


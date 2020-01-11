<?php
//Enter the connection details of your MySQL database here
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tutoronline";

//connect to db
$db = new mysqli($db_host,$db_user, $db_password, $db_name);
$db->query("SET NAMES UTF8");


$connect = mysqli_connect("localhost", "root", "", "tutoronline");
$connect->query("SET NAMES UTF8");

?>
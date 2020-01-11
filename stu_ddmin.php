<?php
// connect to the database
	include('connect_db.php');
// get results from database

$strid =  $_GET["uid"];

$sql = "DELETE FROM user WHERE uid = $strid ";
$query = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    header("location:stu.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close(); // close database connection
?>

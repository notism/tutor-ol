<?php
// connect to the database
include('connect_db.php');
// get results from database

$strid =  $_GET["booking_id"];

$sql = "DELETE FROM booking WHERE booking_id = $strid ";
$query = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    header("location:allc.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close(); // close database connection
?>

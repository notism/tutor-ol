<?php
// connect to the database
include('connect_db.php');
// get results from database

$strid =  $_GET["course_id"];

$sql = "DELETE FROM courses WHERE course_id = $strid ";
$query = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    header("location:addclass_ad.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close(); // close database connection
?>

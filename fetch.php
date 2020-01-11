<?php
session_start();
//fetch.php
include('_connect.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM booking 
  WHERE c_name LIKE '%".$search."%'AND u_name LIKE '%".$_SESSION["User_ID"]."%'
  OR t_name LIKE '%".$search."%'AND u_name LIKE '%".$_SESSION["User_ID"]."%' 
  OR date LIKE '%".$search."%' AND u_name LIKE '%".$_SESSION["User_ID"]."%'
  OR time LIKE '%".$search."%'AND u_name LIKE '%".$_SESSION["User_ID"]."%'
  
  OR place_b LIKE '%".$search."%'AND u_name LIKE '%".$_SESSION["User_ID"]."%'
  OR descrip LIKE '%".$search."%'AND u_name LIKE '%".$_SESSION["User_ID"]."%'
 ";
}
else
{
 $query = "
  SELECT * FROM booking WHERE u_name LIKE '%".mysqli_real_escape_string($connect,$_SESSION["User_ID"])."%' ORDER BY booking_id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-hover">
    <tr class="table-info">
     <th><h4><center>วันที่</th>
	<th ><h4><center>ชื่อคอร์ส</th>
	<th><h4><center>เวลา</th>
	<th><h4><center>สถานที่</th>
	<th><h4><center>ติวเตอร์</th>
	<th width="350"><h4><center>คำแนะนำ</th>
	<th></th>
	<th></th>
	<th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr class="table-warning">
    <td><center>'.$row["date"].'</td>
    <td><center>'.$row["c_name"].'</td>
    <td><center>'.$row["time"].'</td>
    <td><center>'.$row["place_b"].'</td>
    <td><center>'.$row["t_name"].'</td>
	<td><center>'.$row["descrip"].'</td>
	<td><button class="btn btn-default btn-xs "><a href="edit_c.php?booking_id=' . $row['booking_id'] . '">แก้ไข </a></button></td>
	<td><button class="btn btn-default btn-xs "><a href="delete_c.php?booking_id=' . $row['booking_id'] . '">ยกเลิกการนัด</a></button></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
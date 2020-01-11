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
  WHERE c_name LIKE '%".$search."%'
  OR t_name LIKE '%".$search."%' 
  OR date LIKE '%".$search."%' 
  OR time LIKE '%".$search."%'
  OR booking_id LIKE '%".$search."%'
  OR place_b LIKE '%".$search."%'
  OR descrip LIKE '%".$search."%'
  OR u_name LIKE '%".$search."%'
 
 ";
}
else
{
 $query = "
  SELECT * FROM booking ORDER BY date
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th><h4><center>วันที่</th>
	 <th ><h4><center>ID</th>
	<th ><h4><center>ชื่อคอร์ส</th>
	<th><h4><center>เวลา</th>
	<th><h4><center>สถานที่</th>
	<th><h4><center>ติวเตอร์</th>
	<th><h4><center>ผู้ลงทะเบียน</th>
	<th width="200"><h4><center>คำแนะนำ</th>
	<th></th>
	<th></th>
	<th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><center>'.$row["date"].'</td>
	<td><center>' . $row['booking_id'] . '</td>
    <td><center>'.$row["c_name"].'</td>
    <td><center>'.$row["time"].'</td>
    <td><center>'.$row["place_b"].'</td>
    <td><center>'.$row["t_name"].'</td>
	<td><center>' . $row['u_name'] . '</td>
	<td><center>'.$row["descrip"].'</td>
	<td><a href="ediadmin.php?booking_id=' . $row['booking_id'] . '">แก้ไข </a></td>
	<td><a href="deladmin.php?booking_id=' . $row['booking_id'] . '">ลบ</a></td>
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
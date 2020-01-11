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
  WHERE c_name LIKE '%".$search."%' AND t_name LIKE '%".$_SESSION["User_ID"]."%' 
  OR date LIKE '%".$search."%' AND t_name LIKE '%".$_SESSION["User_ID"]."%' 
  OR time LIKE '%".$search."%'AND t_name LIKE '%".$_SESSION["User_ID"]."%' 
  OR booking_id LIKE '%".$search."%'AND t_name LIKE '%".$_SESSION["User_ID"]."%' 
  OR place_b LIKE '%".$search."%'AND t_name LIKE '%".$_SESSION["User_ID"]."%' 
  OR descrip LIKE '%".$search."%'AND t_name LIKE '%".$_SESSION["User_ID"]."%' 
  OR u_name LIKE '%".$search."%'
  AND t_name LIKE '%".$_SESSION["User_ID"]."%' 
 
 ";
}
else
{
 $query = "
  SELECT * FROM booking WHERE t_name LIKE '%".mysqli_real_escape_string($connect,$_SESSION["User_ID"])."%' ORDER BY date
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th><h4><center>ชื่อคอร์ส</th>
<th><h4><center>วันที่</th>
<th><h4><center>เวลา</th>
<th><h4><center>สถานที่</th>
<th><h4><center>ผู้ลงทะเบียน</th>
<th width="250"><h4><center>คำแนะนำ</th>
<th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   
	
    <td><center>'.$row["c_name"].'</td>
	<td><center>' . $row['date'] . '</td>
    <td><center>'.$row["time"].'</td>
    <td><center>'.$row["place_b"].'</td>
    
	<td><center>' . $row['u_name'] . '</td>
	<td><center>'.$row["descrip"].'</td>
	<td><a href="comte.php?booking_id=' . $row['booking_id'] . '">ให้คำแนะนำเพิ่ม</a></td>

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
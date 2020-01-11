<?php
session_start();
//fetch.php
include('_connect.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM courses 
  WHERE c_name LIKE '%".$search."%'
  OR c_detail LIKE '%".$search."%' 
  OR teac LIKE '%".$search."%' 
  OR regis LIKE '%".$search."%'

 
 ";
}
else
{
 $query = "
  SELECT * FROM courses ORDER BY course_id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    
	<th ><h4><center>ชื่อคอร์ส</th>
	<th><h4><center>รายละเอียด</th>
	
	<th><h4><center>จำนวนผู้สมัครเรียน</th>
	<th><h4><center>ผู้สอน</th>
	
	<th></th>
	
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    
    <td><center>'.$row["c_name"].'</td>
    
    <td><center>'.$row["c_detail"].'</td>
    <td><center>'.$row["regis"].'</td>
	<td><center>' . $row['teac'] . '</td>
	
	<td><a href="edit_c_byad.php?course_id=' . $row['course_id'] . '">แก้ไข </a> &nbsp;  &nbsp;   <a href="del_c_byad.php?course_id=' . $row['course_id'] . '">ลบ</a></td>
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
<?php
session_start();
//fetch.php
include('_connect.php');
$output = '';
$sta="TUTOR";
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM user 
  WHERE username LIKE '%".$search."%' AND status LIKE '%".$sta."%'
  OR firstname LIKE '%".$search."%'  AND status LIKE '%".$sta."%'
  OR lastname LIKE '%".$search."%'  AND status LIKE '%".$sta."%'
  OR address LIKE '%".$search."%' AND status LIKE '%".$sta."%'
  OR tel LIKE '%".$search."%' AND status LIKE '%".$sta."%'
  OR age LIKE '%".$search."%' AND status LIKE '%".$sta."%'
  OR email LIKE '%".$search."%'
  AND status LIKE '%".$sta."%'
 ";
}
else
{
	
 $query = "
  SELECT * FROM user WHERE status LIKE '%".mysqli_real_escape_string($connect,$sta)."%' 
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    <th ><h4><center>ID</th>
<th ><h4><center>ชื่อ</th>
<th ><h4><center>นามสกุล</th>

<th><h4><center>ที่อยู่</th>
<th><h4><center>อายุ</th>
<th><h4><center>Email</th>
<th><h4><center>เบอร์ติดต่อ</th>
<th><h4><center>วิชาที่สอน</th>

<th></th>
<th></th>

<th></th>
<th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><center>' . $row['username'] . '</td>
    <td><center>' . $row['firstname'] . '</td>
    <td><center>' . $row['lastname'] . '</td>
    <td><center>' . $row['address'] . '</td>
    <td><center>' . $row['age'] . '</td>
	<td><center>' . $row['email'] . '</td>
	<td><center>' . $row['tel'] . '</td> 
	<td><center>' . $row['education'] . '</td>
	
	<td><a href="edit_t.php?uid=' . $row['uid'] . '">แก้ไข </a></td> 
	<td><a href="edit_tea.php?uid=' . $row['uid'] . '">ลบ</a></td>
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
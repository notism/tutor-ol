<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "
SELECT * FROM user 
WHERE uid != '".$_SESSION['user_id']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-hover">

 <tr class="table-info">
  <th width="70%">ผู้ใช้</td>
  
  <th width="10%">Messenger</td>
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['uid'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label label-success">Online</span>';
 }
 else
 {
  $status = '<span class="label label-danger">Offline</span>';
 }
 $output .= '
 <tr class="table-warning">
  <td>'.$row['firstname']." ".$row['lastname'].' '.count_unseen_message($row['uid'], $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row['uid'], $connect).'</td>
  
  <td><button type="button" class="btn btn-default btn-lg start_chat" data-touserid="'.$row['uid'].'" data-tousername="'.$row['username'].'">ส่งข้อความ</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>
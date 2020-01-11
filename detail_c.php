<?php
	
	



$strid =  $_GET["c_name"];



if ($strid=="English") {
    header("location:eng_detail.php");
} elseif($strid=="สังคมศึกษา") {
    header("location:soc_detail.php");
}elseif($strid=="ภาษาไทย") {
    header("location:thai_detail.php");
}elseif($strid=="วิทยาศาสตร์") {
    header("location:sci_detail.php");
}else{
    header("location:mat_detail.php");
}
?>
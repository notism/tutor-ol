<?php
include('connect_db.php');
$query ="SELECT * FROM courses " or die ("Error:".mysqli_error());
$result = mysqli_query($conn,$query);

$query2 ="SELECT course_id FROM courses ";
$result2 = mysqli_query($conn,$query2);
$objResult = mysqli_fetch_array($result2,MYSQLI_ASSOC);
	
		
?>
<?php while($row = mysqli_fetch_array($result)){ 

	if($row["course_id"]== 1){
		$a= "eng_on";		
	}elseif($row["course_id"]== 2){
		$a= "thai_on";
		
	}elseif($row["course_id"]== 3){
		$a= "so_on";
		
	}elseif($row["course_id"]== 4){
		$a= "sci_on";
		
	}else{
		$a= "mat_on";
		
	}


?>

	<div class="col-lg-4 course_col">
		<div class="course">
			<div class="course_image"><img src="images/<?php echo $row["image"] ;?>" alt=""></div>
				<div class="course_body">		
					<div class="course_title"><a href="<?php echo $row["dephp"] ;?>.php"><?php echo $row["c_name"] ;?></a></div>
							<div class="course_info">
								<ul>									
									<li><?php echo $row["c_name"] ;?></a></li>
								</ul>
							</div>
							<div class="course_text">
								<p><?php echo $row["c_detail"] ;?></p>
							</div>
						</div>
					<div class="course_footer d-flex flex-row align-items-center justify-content-start">
				
				<div class="course_mark course_free trans_200"><a href="<?php echo $a.".php"  ;?>"> เลือก</a></div>
			</div>
		</div>
	</div>


<?php } ?>















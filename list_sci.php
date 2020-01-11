
<?php
include('connect_db.php');

$edu ="วิทยาศาสตร์";

						
$query ="SELECT * FROM user WHERE education = '".mysqli_real_escape_string($conn,$edu)."'";
$result = mysqli_query($conn,$query);


	
		
?>					
<?php while($row = mysqli_fetch_array($result)){ 




?>							
							
							<div class="col-lg-4 col-md-6">
										<div class="instructor d-flex flex-row align-items-center justify-content-start">
											<div class="instructor_image"><div><img src="images/<?php echo $row["photo"] ;?>" alt=""></div></div>
											<div class="instructor_content">
												<div class="instructor_name"><a href="#"><?php echo $row["firstname"]." ".$row["lastname"] ;?></a></div>
												<div class="instructor_title">Tutor</div>
											</div>
										</div>
									</div>
									
									
									
									
									
<?php } ?>
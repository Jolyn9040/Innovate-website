	<?php
	include('database.php');

	$sql = "Select * from tablecourse";
	
	$result = mysqli_query($link, $sql);
	
	while($rows = mysqli_fetch_array($result)){
		$reg_list[] = array('courseid' => $rows['courseid'],
					'coursename' => $rows['coursename'],
					'price' => $rows['price'],
					'description' => $rows['description'],
					'courseduration' => $rows['courseduration'],
					'availableseats' => $rows['availableseats']);
	}
	include 'courses.php';
	exit();
	?>
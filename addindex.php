	<?php
	include('database.php');
	
	
$gresult = '';

if(isset($_POST['edit'])){
	$id = $_POST["edit"];
	$sql = "SELECT * FROM tablecourse WHERE courseid = '$id'";
	$result = mysqli_query($link, $sql);
	$gresult = mysqli_fetch_array($result);
	include 'adminupdate.php';
	exit();
}



if (isset($_POST['insert'])){
	$courseid = mysqli_real_escape_string($link, strip_tags($_POST['courseid']));
	$coursename = mysqli_real_escape_string($link, strip_tags($_POST['coursename']));
	$price = mysqli_real_escape_string($link, strip_tags($_POST['price']));
	$description = mysqli_real_escape_string($link, strip_tags($_POST['description']));
	$courseduration = mysqli_real_escape_string($link, strip_tags($_POST['courseduration']));
	$availableseats = mysqli_real_escape_string($link, strip_tags($_POST['availableseats']));
	$sql = "INSERT INTO tablecourse SET coursename = '$coursename',
									 price = '$price',
									 description = '$description',
									 courseduration = '$courseduration',
									 availableseats = '$availableseats'";
	$result = mysqli_query($link, $sql);

	header ('Location: add.php');
	exit();
}

if (isset($_POST['update'])){
$courseid = mysqli_real_escape_string($link, strip_tags($_POST['courseid']));
	$coursename = mysqli_real_escape_string($link, strip_tags($_POST['coursename']));
	$price = mysqli_real_escape_string($link, strip_tags($_POST['price']));
	$description = mysqli_real_escape_string($link, strip_tags($_POST['description']));
	$courseduration = mysqli_real_escape_string($link, strip_tags($_POST['courseduration']));
	$availableseats = mysqli_real_escape_string($link, strip_tags($_POST['availableseats']));
	$sql = "UPDATE tablecourse SET  coursename = '$coursename',
									price = $price,
									description = '$description',
									courseduration = $courseduration,
									availableseats = $availableseats
									where courseid = $courseid";
	
	$result = mysqli_query($link, $sql);
	header ('Location: add.php');
	exit();
}


	
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
	include 'add.php';
	exit();
	?>
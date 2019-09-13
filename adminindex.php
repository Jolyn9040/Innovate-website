<?php
include 'database.php';


if (isset($_POST['insert'])){
	$name = mysqli_real_escape_string($link, strip_tags($_POST['name']));
	$courseappliedfor = mysqli_real_escape_string($link, strip_tags($_POST['courseappliedfor']));
	$email = mysqli_real_escape_string($link, strip_tags($_POST['email']));
	$contactnumber = mysqli_real_escape_string($link, strip_tags($_POST['contactnumber']));
	$registrationdate = mysqli_real_escape_string($link, strip_tags($_POST['registrationdate']));
	$sql = "INSERT INTO tableit SET name = '$name',
									 courseappliedfor = '$courseappliedfor',
									 email = '$email',
									 contactnumber = '$contactnumber',
									 registrationdate = '$registrationdate'";
	$result = mysqli_query($link, $sql);
	echo '<script language="javascript">';
   echo 'alert("Registered Successfully. We will contact you shortly");';  
    echo 'window.location= "registration.php"';
   echo '</script>';
	
	exit();
}


$sql = "SELECT * FROM tableit";

$result = mysqli_query($link, $sql);

while ($rows = mysqli_fetch_array($result)){
	$reg_list[] = array ('id' => $rows['id'],
							 'name' => $rows['name'],
							 'courseappliedfor' => $rows['courseappliedfor'],
							 'email' => $rows['email'],
							 'contactnumber' => $rows['contactnumber'],
							 'registrationdate' => $rows['registrationdate']);
}
include 'adminview.php';
exit();
?>
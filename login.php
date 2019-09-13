<?php 

	$dbhost = "localhost";
	$dbname = "ITbase";
	$dbuser = "root";
	$dbpassword = "";
	$dbconn = mysqli_connect ($dbhost, $dbuser, $dbpassword) or die (mysqli_error ()); 
	mysqli_select_db ($dbconn,$dbname);


	$username = mysqli_real_escape_string ($dbconn, $_POST["username"]);
	$password = mysqli_real_escape_string ($dbconn, md5($_POST["password"]));
	
	
	$sql = "SELECT * FROM tablelogin WHERE username = '" . $username . "' AND password = '" . $password . "'";
	
	$result = mysqli_query($dbconn, $sql);
	
	if (mysqli_num_rows ($result) > 0) {
		$row = mysqli_fetch_assoc ($result);
		header ('Location: adminindex.php');
	} else{
		echo("You have entered the wrong password.");
		echo("<a href='loginpage.php'>Click here to login</a>");
	}
	mysqli_close($dbconn);
	//echo($resultStr);
?>

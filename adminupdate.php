<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h2>Update/Add Courses Details</h2>
<form method="post" action="addindex.php">

	<table width="200" border="1">
  <tbody>
 
	  <tr>
    	<td><label for="coursename">Course ID: </label></td>
    	<td><input type="text" name="courseid" value="<?php echo $gresult["courseid"]; ?>" id="courseid" readonly></td>
    </tr>
     <tr>
    	<td><label for="coursename">Course Name: </label></td>
    	<td><input type="text" name="coursename" value="<?php echo $gresult["coursename"]; ?>" id="coursename" required></td>
    </tr>
    <tr>
    	<td><label for="price">Price: </label></td>
    	<td><input type="text" name="price" value="<?php echo $gresult["price"]; ?>" id="price" required></td>
    </tr>
    <tr>
    	<td><label for="description">Description: </label></td>
    	<td><input type="text" name="description" value="<?php echo $gresult["description"]; ?>" id="description" required></td>
    </tr>
    <tr>
    	<td><label for="courseduration">Course Duration(Days): </label></td>
    	<td><input type="text" name="courseduration" value="<?php echo $gresult["courseduration"]; ?>" id="courseduration" required></td>
	</tr>
	<tr>
		<td><label for="availableseats">Available Seats: </label></td>
		<td><input type="text" name="availableseats" value="<?php echo $gresult["availableseats"]; ?>" id="availableseats" required></td>
	</tr>
  </tbody>
</table>



<input type="hidden" name="update" value="">
	<input type="submit" name="save" id="save" value="Save">
</div>
</form>



<form method="post" action="add.php">
	<input type="hidden" name="update" value="">
	<input type="submit" name="cancel" id="cancel" value="Cancel">
</form>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h2>Update/Add Courses Details</h2>
<form method="post" action="add.php">

	<table width="200" border="1">
  <tbody>
 
    <tr>
    	<td><label for="coursename">Course Name: </label></td>
    	<td><input type="text" name="coursename" value=""></td>
    </tr>
    <tr>
    	<td><label for="price">Price: </label></td>
    	<td><input type="text" name="price" value="" id="price"</td>
    </tr>
    <tr>
    	<td><label for="description">Description: </label></td>
    	<td><input type="text" name="description" value="" id="description"</td>
    </tr>
    <tr>
    	<td><label for="courseduration">Course Duration(Days): </label></td>
    	<td><input type="text" name="courseduration" value="" id="courseduration"</td>
	</tr>
	<tr>
		<td><label for="availableseats">Available Seats: </label></td>
		<td><input type="text" name="availableseats" value="" id="availableseats"</td>
	</tr>
  </tbody>
</table>



<input type="hidden" name="insert" value="">
<input type="submit" name="save" id="save" value="Save">
</form>



<form method="post" action="add.php">
	<input type="hidden" name="insert" value="">
	<input type="submit" name="cancel" id="cancel" value="Cancel">
</form>
</body>
</html>
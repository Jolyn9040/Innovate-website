<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Course information</title>
</head>

<?php
include_once 'addindex.php';
?>
<body>
	<div id="wrapper">
		<header class="mainHeader">
		<img  alt="logo" id="logo" src="logo-blue-web.jpg">
			<nav id="menu">
				<ul>
					<li>
						<a href="adminview.php">Registration Details</a>
					</li>
					<li class="active">
						<a href="add.php">Course information</a>
					</li>
					<li>
						<a href="home.html">Logout</a>
					</li>
				</ul>
		</nav>
		</header>
		<section id="mainBanner">
			<img   alt="banner-index">
	</section>
			<div id="mainContent">

				<h2>Update/Add Courses Details</h2>
<table width="200" border="1">
  <tbody>
    <tr>
     <th>Course Name</th>
     <th>Price</th>
     <th>Description</th>
     <th>Course Duration</th>
     <th>Available Seats</th>
    </tr>
    <?php foreach($reg_list as $registration) : ?>
    <tr>
		
    	<td><?php echo $registration["coursename"] ?></td>
    	<td>$<?php echo $registration["price"] ?></td>
    	<td><?php echo $registration["description"] ?></td>
    	<td><?php echo $registration["courseduration"] ?></td>
    	<td><?php echo $registration["availableseats"] ?></td>
		
   		<td><form action="addindex.php" method="post">
    	<input name="edit" type="hidden" value="<?php echo $registration["courseid"] ?>">
    	<input name="" type="submit" value="edit"></form></td>
    	
    	
    	
    	<td>
    		<form action="delete.php" method="post">
    			<input name="delete" type="hidden" value="<?php echo $registration["courseid"] ?>">
    			<input name="" type="submit" value="Delete">
    		</form>
    	</td>
    </tr>
		<?php endforeach; ?>
  </tbody>
</table>
					
					<a href="admininsert.php">Add New Workers</a>
	
			</div>
	</div>

</body>
</html>

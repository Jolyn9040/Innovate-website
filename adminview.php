<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Details</title>
</head>

<?php
include_once 'adminindex.php';
?>
<body>
	<div id="wrapper">
		<header class="mainHeader">
		<img  alt="logo" id="logo" src="logo-blue-web.jpg">
			<nav id="menu">
				<ul>
					<li class="active">
						<a href="adminview.php">Registration Details</a>
					</li>
					<li>
						<a href="add.php">Course information</a>
					</li>
					<li>
						<a href="home.html">Logout</a>
					</li>
				</ul>
		</nav>
		</header>
		<section id="mainBanner">
			<img src="banner4.jpg"  alt="banner-index" >
	</section>
			<div id="mainContent">
				<form>
				<h2>View Registration</h2>
<table width="200" border="1">
  <tbody>
    <tr>
     <th>Name</th>
     <th>Course applied for</th>
     <th>Email</th>
     <th>Contact Number</th>
     <th>Registration Date</th>
    </tr>
    <?php foreach($reg_list as $registration) : ?>
    <tr>
    	<td><?php echo $registration["name"] ?></td>
    	<td><?php echo $registration["courseappliedfor"] ?></td>
    	<td><?php echo $registration["email"] ?></td>
    	<td><?php echo $registration["contactnumber"] ?></td>
    	<td><?php echo $registration["registrationdate"] ?></td>
    	<td>
    		<form action="deleteview.php" method="post">
    			<input name="deleteview" type="hidden" value="<?php echo $registration["id"] ?>">
    			<input name="" type="submit" value="Delete">
    		</form>
    	</td>
    </tr>
		<?php endforeach; ?>
  </tbody>
</table>
				</form>
			</div>
		<footer class="mainFooter">
			&copy; Innovate Training Pte Ltd. <li>Design: <a href="http://innovatetraining.com">&#64;Innovate Training</a></li>
	</footer>
	</div>

</body>
</html>


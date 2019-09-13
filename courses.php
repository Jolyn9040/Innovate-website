<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Courses Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<?php
include_once 'index.php';
?>
<body>
	
<div id="wrapper">
		<header class="mainHeader">
		<img  alt="logo" id="logo" src="logo-blue-web.jpg">
			<nav id="menu">
				<ul>
					<li>
						<a href="home.html">Home</a>
					</li>
					<li class="active">
						<a href="courses.php">Courses</a>
					</li>
					<li>
						<a href="registration.php">Registration</a>
					</li>
					<li>
						<a href="loginpage.php">Login</a>
					</li>
				</ul>
		</nav>
		</header>
		<section id="mainBanner">
			<img src="banner4.jpg"  alt="banner-index" >
	</section>
			<div id="mainContent">
				<article>
					<header>
									<h2>Courses</h2>
								</header>
								<p>
									Promote courses from our company for you to choose which course you want.
								</p>
								
									<div class="row">
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
    </tr>
		<?php endforeach; ?>
  </tbody>
</table>
									</div>
								
				</article>
			</div>
			<aside class="top-sidebar">
				
			</aside>
			<aside class="bottom-sidebar">
			</aside>
		<footer class="mainFooter">
			&copy; Innovate Training Pte Ltd. || Design: <a href="http://innovatetraining.com">&#64;Innovate Training</a>
	</footer>
	</div>
	
</body>
</html>

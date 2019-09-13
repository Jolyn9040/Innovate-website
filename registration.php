<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>
<div id="wrapper">
		<header class="mainHeader">
		<img  alt="logo" id="logo" src="logo-blue-web.jpg">
			<nav id="menu">
				<ul>
					<li>
						<a href="home.html">Home</a>
					</li>
					<li>
						<a href="courses.php">Courses</a>
					</li>
					<li class="active">
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
									<h2>Registration</h2>
								</header>
								<form action="adminindex.php" method="post">
									<div>
										
<table width="500" border="0">
  <tr>
    <td>Name:</td>
    <td><input name="name" type="text"></td>
  </tr>
  <tr>
    <td>Course applied for:</td>
    <td><input name="courseappliedfor" type="text"></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input name="email" type="text"></td>
  </tr>
  <tr>
    <td>Contact Number:</td>
    <td><input name="contactnumber" type="text"></td>
  </tr>
  <tr>
    <td>Registration Date: </td>
    <td><input name="registrationdate" type="date"></td>
  </tr>
</table>
		<input type="hidden" name="insert" value="">
		<input name="save" type="submit" value="Save">
</form>
									</div>
						
				</article>
			</div>
			
		<footer class="mainFooter">
			<p>&copy; Innovate Training Pte Ltd. || Design: <a href="http://innovatetraining.com">&#64;Innovate Training</a></p>
	</footer>
	</div>

</body>
</html>

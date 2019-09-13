<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
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
					<li>
						<a href="registration.php">Registration</a>
					</li>
					<li class="active">
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
								<h2 class="title">Login Page</h2>
								</header>
					
<h4 class="logout" align="left"></h4>

<form id="loginform" action="login.php" method="post">

 <table width="400" border="0">
      <tr>
        <th width="156" scope="row">Username :</th>
        <td width="234"><input type="text" name="username" id="username"></td>
      </tr>
      <tr>
        <th scope="row">Password :</th>
        <td><input type="password" name="password" id="password"></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td><input type="submit" name="dsubmit" id="dsubmit" value="Login">
        <input type="reset" id="reset1" value="Reset"></td>
       
      </tr>
    </table>
</form>
		<footer class="mainFooter">
			<p>&copy; Innovate Training Pte Ltd. || Design: <a href="http://innovatetraining.com">&#64;Innovate Training</a></p>
	</footer>
	</div>

	
</body>
</html>
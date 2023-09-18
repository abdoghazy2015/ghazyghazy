<?php
include "../php/config.php";

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header('Location: account.php');
  die();
}
?>

<!doctype html>
<HTML>
  <head>
	<title>Sade Code Review</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
	<link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>

	<div class="topnav">
		<a href="index.php">Home</a>
    <a class="active">Login</a>
    <a  href="singup.php">Register</a>
</div> 

	<div class="content">

	  <div class="center-div">
		<h1 ALIGN="CENTER">Login Page</h1>
		<img class="center" src="logo.png" /><br>

		<form action="authenticate.php" method="POST">
		  <fieldset>
			<?php
			if (isset($_GET["error"]))
			{
			  if ($_GET["error"] === "wrong") {
				echo "<h4 style='text-align:center; color:red;'>Wrong username and / or password</h4>";
			  }
			}
			?>
			<div class="form-group">
			  <label for="username">Username</label><br>
			  <input type="text" id="username" name="username" maxlength="20" class="form-control">
			</div>
			<div class="form-group">
			  <label for="password">Password:</label><br>
			  <div class="controls">
				<input type="password" id="password" name="password" maxlength="20" class="form-control">
			  </div>
			</div>

			<div class="form-actions">
			  <input type="submit" value="Login" class="btn btn-primary">
			</div>
		  </fieldset>
		</form>
	  </div>

	</div>

	<div class="contentafter" id="contentafter1"></div>

  </body>

  <script src="js/script.js"></script>
</html>

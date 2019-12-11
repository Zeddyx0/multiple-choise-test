<?php
// Starting session
	session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>index</title>
		<meta name="description" content="">
		<meta name="author" content="amha2">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="../CSS/main.css">
	</head>

	<body>

		<header>
			COMP233 Assignment 3
		</header>
		<!--login form-->
		<div class="fullPage">
		<?php require_once 'navigation.php';  ?>
			<form name="form1" action="processLogin.php" method="post"
				onsubmit="" >
			<div class="rightContent" id="content">
				<h1>Log In</h1>
				<label>Username:</label>
				<input type="text" id="username" name="username">
				<br>
				<label>Password:</label>
				<input type="password"id="password" name="password"><br>
				<input class="button" type="submit"name="Submit">
			</div>
			</form>
		</div>
		<div class="clear"></div>

		<footer>
			<p>
			
			</p>
		</footer>

	</body>
</html>

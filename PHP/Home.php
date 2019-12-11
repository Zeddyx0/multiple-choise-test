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


		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="../CSS/main.css">
<!--calls the php lines to change scc files -->
	
	</head>

	<body>

		<header>
			COMP233 Multiple Choice Tests
		</header>
		<!--calls the php navigation page -->
		<div class="fullPage">
			<?php
			
			require_once 'navigation.php';
			?>
			
			<!-- the main content-->
			<div class="rightContent" id="content">
				<h1>Home Page</h1>
				<br>
				You can view tests but not take them until you log in
			</div>
		</div>
		<!--clears the space below the main content-->
		<div class="clear"></div>

		<footer>
			
		
		</footer>

	</body>
</html>

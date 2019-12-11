<?php
// Starting session
	session_start(); ?>
	<head>
	<!-- -->
	<style>
		a:link {
			text-decoration: none;
		}

		a:visited {
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		a:active {
			text-decoration: underline;
		}
	</style>

	<!--the navigation menu -->
</head>
<nav class="rNav">
	<?php
	if (isset($_SESSION['logged_in'])) {
		if ($_SESSION['logged_in'] == "true") {
			// user logged in, so we show logout link
			echo "<a href='logout.php'>Logout</a><br>";

		} else {
			//  not login
			echo "<a href='login.php'>Login</a>";

		}

	} else {
		echo "<a href='login.php'>Login</a>";
	}
	?>

	<br>
	<a href="Home.php">Home</a>
	<br>
	<a href="tests.php?testID=t1">Test #1</a>
	<br>
	<a href="tests.php?testID=t2">Test #2</a>
	<br>
	<a href="tests.php?testID=t3">Test #3</a>
	<br>
	<!--hides and unhides loging, logout and preferences -->

	<p></p>
	<p></p>

</nav>
<?php // Starting session
session_start();
 ?>
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
		<link rel="stylesheet" href="../CSS/main.css?asdf">
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
				<h1>Test</h1>
				<br>
				<form action="marking.php" method="post">
					
					<?php 
					//sets the test number
					$_GET["testID"];

					
					$servername = "mysql.cms.waikato.ac.nz";
					$dbusername = "amha2";
					$dbpassword = "my10945365sql";
					$dbname = "amha2";

					// Create connection
					$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					//sets the test number
					$test_id = 1;
					if ($_GET["testID"] === "t1") {
						$test_id = 1;
					} elseif ($_GET["testID"] === "t2") {
						$test_id = 2;
					} else {
						$test_id = 3;
					}

					//connects to database
					$sql = "SELECT * from TestTable INNER JOIN Questions ON TestTable.question_id = Questions.id AND TestTable.test_id = '$test_id'";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($result)) {

						$id = $row['id'];
					
						//displays question and answers with different classes
						echo "<div class='que'>";
						echo "Q: ";
						echo $row['Questions'] . "<br/>";
						echo "</div>";
						echo "<div class='ans'>";
						echo "<br/><input type='radio' name='$id' value='Answer_a'>";
						echo "a- ";
						echo $row['Answer_a'];
						echo "<br/><input type='radio' name='$id' value='Answer_b'>";
						echo "b- ";
						echo $row['Answer_b'];
						echo "<br/><input type='radio' name='$id' value='Answer_c'>";
						echo "c- ";
						echo $row['Answer_c'];
						echo "<br/><input type='radio' name='$id' value='Answer_d'>";
						echo "d- ";
						echo $row['Answer_d'];
						
						
						
						echo "<br/>";
						echo "<br/>";
						echo "<br/>";
						echo "</div>";
					}

					//close connection
					mysqli_close($conn);
					?>
					<?php
					// if session is logged in show submit button
					if (isset($_SESSION['logged_in'])) {
						echo "<input type='submit'>
							  <input type='hidden' name='testnum' value='$test_id'>
							  ";
					} else {echo 'You are not signed in.';
					}
					?>
				</form>
			</div>
		</div>
		<!--clears the space below the main content-->
		<div class="clear"></div>

		<footer>

		</footer>

	</body>
</html>


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
					<?php $_GET["testID"];

					//page number
					$pagenum = $_GET['number'];

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
					if ($_POST["testnum"] === "1") {
						$test_id = 1;
					} elseif ($_POST["testnum"] === "2") {
						$test_id = 2;
					} else {
						$test_id = 3;
					}

					//connects to database
					$sql = "SELECT * from TestTable INNER JOIN Questions ON TestTable.question_id = Questions.id AND TestTable.test_id = '$test_id'";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($result)) {

						
						
						//displays question and answers with different classes
						echo "<div class='que'>";
						echo "Q: ";
						echo $row['Questions'] . "<br/>";
						echo "</div>";
						echo "<div class='ans'>";
						//if answer == correct answer 
						echo "Your Answer: ";
						
						//echos the answer value
						echo $row[$_POST[$row['id']]];
						
						echo "<br/>";
						//if the answer was correct or incorrect
						if($_POST[$row['id']] === $row['correct']){
							echo "Your answer was correct ";
						}else{
							echo "Your answer was not correct";
						}
						
		
						echo "</div>";
					}

					mysqli_close($conn);
					
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


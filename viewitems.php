<?php
	session_start();

	// Establishing the database connection
	$con = mysqli_connect("veda.coannvnsp2rk.ap-south-1.rds.amazonaws.com", "root", "vallika4503", "veda");

	// Checking the database connection
	if ($con === false) {
		die("CONNECTION FAILED" . mysqli_connect_error());
	} else {
		$uname = $_SESSION['uname'];
		$a = "SELECT `item`, `quantity`, `price` FROM retailerdata WHERE `username`='$uname'";
		$result = mysqli_query($con, $a);
	}
?>

<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="ff.css">
</head>

<body>
	<div class="banner">
		<div class="navbar">
			<img src="logo1.png" class="logo">
			<ul>
				<li><a href="retailerA.php"><span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span> Back</a></li>
				<li><a href="rlogout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
			</ul>
		</div>
		<div align="center">
			<h6>Items requested by you : </h6>
			<?php
				if ($result->num_rows > 0) {
					echo "<table class='cont' cellpadding='10' cellspacing='2' align='center'>";
					echo "<tr><th>Item</th><th>Quantity</th><th>Price</th></tr>";

					while (($row = mysqli_fetch_array($result)) != NULL) {
						echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
					}

					echo "</table>";
				} else {
					echo "<script type=\"text/javascript\">
							alert(\"No items selected !\");
						</script>";
					echo "<script> window.location.assign('retailerA.php'); </script>";
				}
			?>
		</div>
	</div>
</body>

</html>

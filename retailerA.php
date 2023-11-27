<?php
	session_start();
	
	// Establishing the database connection
	$con = mysqli_connect("13.233.0.164", "root", "vallika4503", "veda");
	
	// Checking the database connection
	if ($con === false) {
		die("CONNECTION FAILED" . mysqli_connect_error());
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Getting form data
		$item = mysqli_real_escape_string($con, $_POST['course']);
		$quantity = mysqli_real_escape_string($con, $_POST['quantity']);
		$price = mysqli_real_escape_string($con, $_POST['price']);
		
		// Getting the logged-in username from the session
		$uname = $_SESSION['uname'];

		// Inserting data into the database
		$sql = "INSERT INTO retailerdata(username, item, quantity, price) VALUES ('$uname', '$item', '$quantity', '$price')";

		if (mysqli_query($con, $sql)) {
			echo "<script type=\"text/javascript\">
				alert(\"Data submitted successfully!\");
			</script>";
		} else {
			echo "<script type=\"text/javascript\">
				alert(\"Error: " . mysqli_error($con) . "\");
			</script>";
		}
	}

	// Closing the database connection
	mysqli_close($con);
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="acc1.css">
</head>
<body>
	<div class="banner">	
		<div class="navbar">
			<img src="logo1.png" class="logo">
			<ul>
				<li><a href="deleteitem.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>   Delete</a></li>
				<li><a href="viewitems.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>   View</a></li>
				<li><a href="rlogout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>   Logout</a></li>
			</ul>
		</div>
		<div class="content">
			<h6>
				<?php
					echo "Hello " . $_SESSION['uname'] . "... Welcome to your account";
				?>
			</h6>
			<p>Buy your required product here for a reasonable price !!!</p>
		</div><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br>
		<div class="main">
			<form name="fa" action="retailerdata.php" method="post">
				<h2 class="name">Select the product : </h2>
				<select class="slist" type="list" name="course" required>
					<option value>Select your product : </option>
					<option value="rice">Rice</option>
					<option value="wheat">Wheat</option>
					<option value="corn">Corn</option>
					<option value="gnuts">Groundnuts</option>
					<option value="cotton">Cotton</option>
					<option value="sugar">Sugarcane</option>
					<option value="tobacco">Tobacco</option>
					<option value="jute">Jute</option>
				</select>

				<h2 class="name">Enter quantity : </h2><br>
				<input class="username" type="number" name="quantity">
				<label class="quantity">*in kilograms</label>

				<h2 class="name">Enter your Price : </h2>
				<input class="qprice" type="number" name="price">
				<label class="quantity">*per kilograms</label>

				<button type="submit"><span class="ab"></span>Submit</button>
			</form>
		</div>
	</div>
</body>
</html>

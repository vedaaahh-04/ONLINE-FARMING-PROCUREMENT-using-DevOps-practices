<?php
	session_start();

	// Establishing the database connection
	$con = mysqli_connect("13.233.0.164", "root", "vallika4503", "veda");

	// Checking the database connection
	if ($con === false) {
		die("CONNECTION FAILED" . mysqli_connect_error());
	}

	// Retrieving user information from the session
	$uname = $_SESSION['uname'];

	// Retrieving retailer information
	$a = "select `rfname` from `retailers` where `runame`='$uname'";
	$result = mysqli_query($con, $a);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$fname = $row['rfname'];
		}
	}

	$b = "select `rlname` from `retailers` where `runame`='$uname'";
	$result1 = mysqli_query($con, $b);

	if ($result1->num_rows > 0) {
		while ($row = $result1->fetch_assoc()) {
			$lname = $row['rlname'];
		}
	}

	$c = "select `rpno` from `retailers` where `runame`='$uname'";
	$result2 = mysqli_query($con, $c);

	if ($result2->num_rows > 0) {
		while ($row = $result2->fetch_assoc()) {
			$pno = $row['rpno'];
		}
	}

	$d = "select `raddress` from `retailers` where `runame`='$uname'";
	$result3 = mysqli_query($con, $d);

	if ($result3->num_rows > 0) {
		while ($row = $result3->fetch_assoc()) {
			$address = $row['raddress'];
		}
	}

	// Getting form data
	$item = mysqli_real_escape_string($con, $_POST['course']);
	$quantity = mysqli_real_escape_string($con, $_POST['quantity']);
	$price = mysqli_real_escape_string($con, $_POST['price']);

	// Inserting data into the database
	$total = "INSERT INTO retailerdata(firstname, lastname, phoneno, addres, item, quantity, price, username) 
		VALUES ('$fname', '$lname', '$pno', '$address', '$item', '$quantity', '$price', '$uname')";

	if (mysqli_query($con, $total)) {
		echo "<script type=\"text/javascript\">
			alert(\"Items stored. Sellers will contact you soon!\");
		</script>";
		echo "<script> window.location.assign('retailerA.php'); </script>";
	} else {
		echo "<script type=\"text/javascript\">
			alert(\"ERROR\");
		</script>";
		echo "<script> window.location.assign('retailerA.php'); </script>";
	}

	// Closing the database connection
	mysqli_close($con);
?>

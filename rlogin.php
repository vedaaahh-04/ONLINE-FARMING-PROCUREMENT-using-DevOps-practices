<?php
	session_start();

	// Getting form data
	$uname = mysqli_real_escape_string($con, $_POST['runame']);
	$password = mysqli_real_escape_string($con, $_POST['rpwd']);

	// Establishing the database connection
	$con = mysqli_connect("13.233.0.164", "root", "vallika4503", "veda");

	// Checking the database connection
	if ($con === false) {
		die("Connection failed: " . mysqli_connect_error());
	} else {
		// Preparing the SQL statement
		$stmt = $con->prepare("SELECT * FROM retailers WHERE runame = ?");
		$stmt->bind_param("s", $uname);
		$stmt->execute();

		// Getting the result
		$stmt_result = $stmt->get_result();

		if ($stmt_result->num_rows > 0) {
			// Fetching data from the result
			$data = $stmt_result->fetch_assoc();

			// Checking the password
			if ($data['rpassword'] === $password) {
				$_SESSION['uname'] = $uname;
				echo "<script> window.location.assign('retailerA.php'); </script>";
			} else {
				echo "<script type=\"text/javascript\">
						alert(\"Invalid username or password !!!\");
					</script>";
				echo "<script> window.location.assign('loginR.html'); </script>";
			}
		} else {
			echo "<script type=\"text/javascript\">
					alert(\"Invalid username or password !!!\");
				</script>";
			echo "<script> window.location.assign('loginR.html'); </script>";
		}
	}

	// Closing the database connection
	mysqli_close($con);
?>

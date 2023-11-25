<?php
	session_start();
	$con = mysqli_connect("veda.coannvnsp2rk.ap-south-1.rds.amazonaws.com", "root", "vallika4503", "veda");

	if ($con === false) {
		die("CONNECTION FAILED" . mysqli_connect_error());
	}

	$uname = $_SESSION['uname'];
	$item  = $_POST['course'];

	$sql = "DELETE FROM `retailerdata` WHERE `username`='$uname' AND `item`='$item'";
	$result = mysqli_query($con, $sql);

	if ($result === TRUE) {
		echo "<script type=\"text/javascript\">
			alert(\"Item deleted successfully\");
		</script>";
		echo "<script> window.location.assign('deleteitem.php'); </script>";
	} else {
		echo "<script type=\"text/javascript\">
			alert(\"ERROR...Item not found\");
		</script>";
		echo "<script> window.location.assign('deleteitem.php'); </script>";
	}

	mysqli_close($con);
?>

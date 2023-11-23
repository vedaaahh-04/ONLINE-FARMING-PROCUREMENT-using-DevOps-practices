<?php
	session_start();
	$con = mysqli_connect("localhost","root","","veda");
	if($con===false)
		die("CONNECTION FAILED".mysqli_connect_error());
	$uname = $_SESSION['uname'];
	$a = "select `rfname` from `retailers` where `runame`='$uname'";
	$result = mysqli_query($con,$a);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$fname = $row['rfname'];
		}
	}
	$b = "select `rlname` from `retailers` where `runame`='$uname'";
	$result1 = mysqli_query($con,$b);
	if ($result1->num_rows > 0) {
		// output data of each row
		while($row = $result1->fetch_assoc()) {
			$lname = $row['rlname'];
		}
	}
	$c = "select `rpno` from `retailers` where `runame`='$uname'";
	$result2 = mysqli_query($con,$c);
	if ($result2->num_rows > 0) {
		// output data of each row
		while($row = $result2->fetch_assoc()) {
			$pno = $row['rpno'];
		}
	}
	$d = "select `raddress` from `retailers` where `runame`='$uname'";
	$result3 = mysqli_query($con,$d);
	if ($result3->num_rows > 0) {
		// output data of each row
		while($row = $result3->fetch_assoc()) {
			$address = $row['raddress'];
		}
	}
	$item = $_POST['course'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$total = "INSERT INTO retailerdata(firstname,lastname,phoneno,address,item,quantity,price,username) VALUES ('$fname','$lname','$pno','$address','$item','$quantity','$price','$uname')";
	if(mysqli_query($con,$total)){
		echo "<script type=\"text/javascript\">
			alert(\"Items stored.Sellers will contact you soon!\");
		</script>";
		echo "<script> window.location.assign('retailerA.php'); </script>";
	}
	else{
		echo "<script type=\"text/javascript\">
			alert(\"ERROR\");
		</script>";
		echo "<script> window.location.assign('retailerA.php'); </script>";
	}		
	mysqli_close($con);
	$con->close();
?>
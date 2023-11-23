<?php
	session_start();
	$uname = $_POST['funame'];
	$password = $_POST['fpwd'];
	$con = mysqli_connect("localhost","root","","mpofp");
	if($con==false){
		die("connection failed".mysqli_connect_error());
	}
	else{
		$stmt = $con->prepare("select * from farmer where uname = ?");
		$stmt->bind_param("s",$uname);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['password'] === $password){
				$_SESSION['uname'] = $uname;
				echo "<script> window.location.assign('farmerA.php'); </script>";
			}
			else{
				echo "<script type=\"text/javascript\">
						alert(\"Invalid username or password !!!\");
					</script>";
				echo "<script> window.location.assign('loginF.html'); </script>";	
			}
		}
		else{
			echo "<script type=\"text/javascript\">
					alert(\"Invalid username or password !!!\");
				</script>";
			echo "<script> window.location.assign('loginF.html'); </script>";	
		}
	}

?>
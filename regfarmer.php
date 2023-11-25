<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="in1.css">
</head>
<body>
	<div class="banner">	
		<div class="navbar">
			<img src="logo1.png" class="logo">
			<ul>
				<li><a href="homepage.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>   home</a></li>
				<li><a href="help.html"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>   help</a></li>
				<li><a href="about.html"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>   about us</a></li>
			</ul>
		</div>
		<div class="content">
			<?php
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);

				$host = "veda.coannvnsp2rk.ap-south-1.rds.amazonaws.com";
				$user = "root";
				$pass = "";
				$db = "veda";
				
				$con = mysqli_connect($host, $user, $pass, $db,'3306');
				
				if (!$con) {
					die("Connection failed: " . mysqli_connect_error());
				}
				
				// Connection successful, you can now use $con to interact with the database
				
				$a=$_POST['ffname'];
				$b=$_POST['flname'];
				$c=$_POST['fphone'];
				$d=$_POST['funame'];
				$e=$_POST['fpwd'];
				$g=$_POST['cfpwd'];
				$f=$_POST['faddr'];
				$q="INSERT INTO farmers(fname,lname,pno,uname,password,address) VALUES ('$a','$b','$c','$d','$e','$f')";
				if($e != $g){
					echo "<script type=\"text/javascript\">
						alert(\"Password does not match !!!\");
					</script>";
					echo "<script> window.location.assign('registerF.html'); </script>";
					return false;
				}
				if(strlen($e) < 5){
					echo "<script type=\"text/javascript\">
						alert(\"Password length should be greater than 5 !!!\");
					</script>";
					echo "<script> window.location.assign('registerF.html'); </script>";
					return false;
				}
				if(mysqli_query($con,$q)){
					echo "<h5>Your registration has successfully completed  !</h5><br>";
					echo "<p>Click here to login to your account :</p>";
					echo "<div><a href='loginF.html'><button><span class='ab'></span>Farmer Login</button></a></div>";
				}
				else{
					echo "<script type=\"text/javascript\">
						alert(\"Username already exist !!!\");
					</script>";
					echo "<script> window.location.assign('registerF.html'); </script>";
				}		
				mysqli_close($con);
			?>
		</div>
	</div>
</body>
</html>

<?php
	session_start();
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
				<li><a href="farmerA.php"><span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>   Back</a></li>
				<li><a href="flogout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>   Logout</a></li>
			</ul>
		</div>
		<div align="center">
			<h6>Retailers list : </h6>
			<?php
				$con = mysqli_connect("localhost","root","","mpofp");
				if($con===false)
					die("CONNECTION FAILED".mysqli_connect_error());
				$item = $_POST['course'];
				$a = "select `firstname`,`lastname`,`phoneno`,`address`,`item`,`quantity`,`price` from retailerdata where `item`='$item' ORDER BY `price` desc";
				$result = mysqli_query($con,$a);
			?>
			<table class="cont" cellpadding="10" cellspacing="2" align="center">
				<tr><th>FirstName    </th>
					<th>LastName    </th>
					<th>PhoneNumber    </th>
					<th>Address    </th>
					<th>Item    </th>
					<th>Quantity(*kg)    </th>
					<th>Price(*kg)    </th>
				</tr>
				<?php
					if ($result->num_rows > 0) {
						while(($row=mysqli_fetch_array($result))!=NULL) {
							echo "<tr><td>".$row[0]."</td>
									  <td>".$row[1]."</td>
									  <td>".$row[2]."</td>
									  <td>".$row[3]."</td>
									  <td>".$row[4]."</td>
									  <td>".$row[5]."</td>
									  <td>".$row[6]."</td></tr>";
						}
				}
				else{
					echo "<script type=\"text/javascript\">
						alert(\"No Buyers found\");
					</script>";
					echo "<script> window.location.assign('farmerA.php'); </script>";
				}
				?>
			</table>
		</div>
	</div>
</body>
</html>

<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="dacc.css">
</head>
<body>
	<div class="banner">	
		<div class="navbar">
			<img src="logo1.png" class="logo">
			<ul>
				<li><a href="retailerA.php"><span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>   Back</a></li>
				<li><a href="rlogout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>   Logout</a></li>
			</ul>
		</div>
		<div class="main">
			<form name="fa" action="itemdeleted.php" method="post">
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
				
				<button type="submit"><span class="ab"></span>Delete</button>
			</form>
		</div>
	</div>
</body>
</html>

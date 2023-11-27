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
                $con = mysqli_connect("13.233.0.164", "root", "vallika4503", "veda");
                if (!$con) {
                    die("CONNECTION FAILED" . mysqli_connect_error());
                }
                $item = mysqli_real_escape_string($con, $_POST['course']);
                $a = "SELECT `firstname`, `lastname`, `phoneno`, `addres`, `item`, `quantity`, `price` FROM retailerdata WHERE `item`='$item' ORDER BY `price` DESC";
                $result = mysqli_query($con, $a);
            ?>
            <table class="cont" cellpadding="10" cellspacing="2" align="center">
                <tr>
                    <th>FirstName </th>
                    <th>LastName </th>
                    <th>PhoneNumber </th>
                    <th>Address </th>
                    <th>Item </th>
                    <th>Quantity(*kg) </th>
                    <th>Price(*kg) </th>
                </tr>
                <?php
                    if ($result) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo "<tr><td>" . $row['firstname'] . "</td>
                                      <td>" . $row['lastname'] . "</td>
                                      <td>" . $row['phoneno'] . "</td>
                                      <td>" . $row['addres'] . "</td>
                                      <td>" . $row['item'] . "</td>
                                      <td>" . $row['quantity'] . "</td>
                                      <td>" . $row['price'] . "</td></tr>";
                        }
                    } else {
                        echo "<script type=\"text/javascript\">
                                alert(\"No Buyers found\");
                            </script>";
                        echo "<script> window.location.assign('farmerA.php'); </script>";
                    }
                    mysqli_free_result($result);
                    mysqli_close($con);
                ?>
            </table>
        </div>
    </div>
</body>
</html>

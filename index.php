<html>
<head>
<title> Bob's Auto Parts</title>
</head>

<body>
<form  action="welcome.php" method="post">
FisrtName: <input type="text" name="firstname" value="<?php echo $fname;?>"><br/><br/>
LastName:  <input type="text" name="lastname" value="<?php echo $lname;?>"><br/><br/>
Number of Tyres: <input type="number" name="tyres" value="<?php echo $tyre;?>"><br/><br/>
<input type="submit" name="Calculate"><br/>
    <?php
	  try {
		$conn = new PDO("sqlsrv:server = tcp:sde-server.database.windows.net,1433; Database = SDEBobsAutoParts", "user", "Password1!");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
		print("Error connecting to SQL Server.");
		die(print_r($e));		
	}
    echo "Connected successfully";

    ?>
    </form>
</body>
</html>

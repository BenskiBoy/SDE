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

<html>
<head>
<title> Bob's Auto Parts: Order result</title>
</head>
<body>
    <?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $tyres = $_POST['tyres'];
	$amount=$tyres*110;
    $sql = "INSERT INTO Orders (firstname, lastname, noOftyres, Amount)
    VALUES ('$firstname', '$lastname', '$tyres', '$amount')";

    if ($conn->query($sql) == TRUE) {
      echo "New record created successfully";
      echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //$conn->close();
     echo "<br>";
    echo $_POST["firstname"]." ".$_POST["lastname"].'<br/>';
    echo "total amount due is: ".$amount.'<br/>';

    ?>
</body>
</html>

<?php
	    $firstname = $_POST['firstName'];
        $email = $_POST['email'];
	// Database connection
	$conn = new mysqli('localhost','root','','hotel_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare ("insert into mailing_table(name,email) values('$firstname','$email')");
        if(!$stmt){
            echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
         }
		$execval = $stmt->execute();
        echo "<script> alert('You Joined My Mailing List'); </script>";
		$stmt->close();
		$conn->close();
	}
    ?>  


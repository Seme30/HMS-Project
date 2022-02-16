
<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $arrivaldate = $_POST['arrivaldate'];
        $departdate = $_POST['departdate'];
        $roomtype = $_POST['roomtype'];

	// Database connection
	$conn = new mysqli('localhost','root','','hotel_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booking_table(firstname,lastname,phonenumber,email,arrivaldate,departdate,roomtype) values('$firstname', '$lastname', '$phonenumber', '$email', '$arrivaldate', '$departdate','$roomtype')");
		if(!$stmt){
            echo "Prepare failed: (". $conn->errno.") ".$conn->error."<br>";
         }
		$execval = $stmt->execute();
		echo "<script> alert('Hotel Booked Successfully!'); </script>";
		echo "<script> setTimeout(40000);</script>";
		header("Location:\Booking.html");
		$stmt->close();
		$conn->close();
	}
    ?>  
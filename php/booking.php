<!DOCTYPE php>
<html lang="en">
<head>
</head>
<body>
    <?php
    function insertData(){
        include ('connection.php');
        mysqli_select_db($con,'hotel_db');
        if(isset($_POST('book-btn'))){
           $firstname = $_POST('firstname');
            $lastname = $_POST('lastname');
            $phonenumber = $_POST('phonenumber');
            $email = $_POST('email');
            $arrivaldate = $_POST('arrivaldate');
            $departdate = $_POST('departdate');
            $roomtype = $_POST('roomtype');
        $stmt = INSERT INTO booking_table(firstname,lastname,phonenumber,email,arrivaldate,departdate,roomtype) values ('$firstname','$lastname','$phonenumber','$email','$arrivaldate','$departdate','$roomtype');
        @$execute = mysqli.query($con,$stmt)
        if($execute){
            echo"Registration completed successfully!";		}
        else{
        echo"Error...Registration not completed." .mysqli_error($con);
            }
    }    
        
    ?>  
</body>
</html>
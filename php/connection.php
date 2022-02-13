
<?php  
$host="localhost:";
$username="root";
$password="";
$con =mysqli_connect($host,$username,$password);
if($con)
{
	print "The database is connected";
}
else
{
	die("The database is not connected");
}
?>


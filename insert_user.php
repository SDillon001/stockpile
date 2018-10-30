<?php

error_reporting(E_ALL); ini_set('display_errors', 1);

include 'connection_2.php'; //This include is where the connection is created

//Get the values from the URl

$Fname = $_GET['Fname'];
$Lname = $_GET['Lname'];
$email = $_GET['email'];
$user = $_GET['user'];
$pass = $_GET['pass'];

//Build the SQL statement
$sql = "INSERT INTO Students (Fname, Lname, email, user, pass) values('$Fname', '$Lname','$email', '$user', '$pass')";

//Execute the Query
if (!mysqli_query($conn, $sql)) 
{
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} else {
      echo "Inserted Successfully";
}

//Close the connection
mysql_close($conn);

// To redirect form on a particular page
header("Location:http://stevedillon.net/WNM/608/14_1/inventory.php");

?>
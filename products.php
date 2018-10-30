<?php
//Create the connection and select database
include 'connection.php';

error_reporting(E_ALL); ini_set('display_errors', 1);

//Select all data from the Products table
$sql = "SELECT * FROM Products ORDER BY id ASC";

//Execute Query
$result = mysqli_query($conn, $sql);

//Did the query fail?
if(!$result) die("Query has failed!");

//Make result into PHP array
$Products = array();

if(mysqli_num_rows($result)){
    while($Product = mysqli_fetch_assoc($result)){
        $Products[] = array('Product'=>$Product);
    }
}

//Output data in JSON format
header('Content-type: application/json');
echo json_encode(array('Products'=>$Products));

//Close connection
mysqli_close($conn);

?>
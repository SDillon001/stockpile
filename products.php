<?php
//Create the connection and select database
include 'connection.php';

//error_reporting(E_ALL); ini_set('display_errors', 1);

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
    // $Products[] = $Product;
    $Products[] = array('Product'=>$Product);
  }
}

//Output data in JSON format
header('Content-type: application/json');
echo json_encode(array('Product'=>$Products));

// switch (json_last_error()) {
//   case JSON_ERROR_NONE:
//   echo ' - No errors';
//   break;
//   case JSON_ERROR_DEPTH:
//   echo ' - Maximum stack depth exceeded';
//   break;
//   case JSON_ERROR_STATE_MISMATCH:
//   echo ' - Underflow or the modes mismatch';
//   break;
//   case JSON_ERROR_CTRL_CHAR:
//   echo ' - Unexpected control character found';
//   break;
//   case JSON_ERROR_SYNTAX:
//   echo ' - Syntax error, malformed JSON';
//   break;
//   case JSON_ERROR_UTF8:
//   echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
//   break;
//   default:
//   echo ' - Unknown error';
//   break;
// }

//Close connection
mysqli_close($conn);

?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


/**create your own database and add credentials */

$servername ="localhost";
$username ="*****";
$password ="****";
$dbname ="****";

$con= mysqli_connect($servername,$username,$password,$dbname);
if($con){
    echo "connection ok";
}
else{
    echo "connection failed";
}


?>
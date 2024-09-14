<?php

$host="localhost";
$userName="root";
$password="";
$db="phptest";

$con=mysqli_connect($host,$userName,$password,$db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
 
}
else{
  
}

?>
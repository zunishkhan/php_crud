<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "php_crud";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn == false){
    die("Failed to connect to the database");
}else{
    return $conn;
}
?>
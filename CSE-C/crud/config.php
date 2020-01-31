<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'csc2020';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);
if ($conn){
    echo "ok";
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>
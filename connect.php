<?php
$host     = 'localhost';
$dbName   = 'uptake';
$userName = 'root';
$password = '';

$connect = mysqli_connect($host, $userName, $password,$dbName );

if(!$connect){
    echo 'connection failed...!!!!';
}
else{
    echo 'sucessfully...!!!';
}
?>
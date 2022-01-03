<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";


$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if (!$conn){
    die ("connection failed: ".mysqli_connect_error());
}
?>
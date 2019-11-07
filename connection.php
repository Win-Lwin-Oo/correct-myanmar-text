<?php
$db_host="localhost";
$username = "root";
$password="";
$db_name="mm";

$conn = mysqli_connect($db_host,$username,$password,$db_name) or die('connection error');
mysqli_set_charset($conn,'utf8');

?>
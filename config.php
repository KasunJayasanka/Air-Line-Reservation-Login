<?php 

$server = "us-cdbr-east-06.cleardb.net";
$user = "bd66653b4b6b6b";
$pass = "f76d5d92";
$database = "usersbase";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>

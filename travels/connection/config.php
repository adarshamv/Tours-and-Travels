<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "droame";

$conn = mysqli_connect($server, $user, $pass, $database);


if (!$conn) 
   
{
    die("<script>alert('Connection Failed.')</script>");
}
//echo "Connected successfully";

?>



<?php
$user="root";
$password="";
$server="localhost";
$dbname="hotel";
$conn = mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
echo"Connection Successful";
mysqli_close($conn);
?>
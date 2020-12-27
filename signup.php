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

//include "index.php";
//include "signup.html";
$sql="create table sign(firstname varchar(50) notnull,lastname varchar(20) notnull,email varchar(20) ,pass varchar(20))";
if(mysqli_query($conn,$sql))
{
    echo "table created sucessful";
}
else
{
    echo "error while creating table";
}

$first=$_POST['firstname'];
$last=$_POST['lastname'];
//$phon=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="INSERT INTO sign(firstname,lastname,email,pass) values($first,$last,$email,$pass) ";
if(mysqli_query($conn,$sql))
{
    echo"<h1>New record added successfully</h1>";
}
else
{
    echo"Error";
}
mysqli_close($conn);
?>
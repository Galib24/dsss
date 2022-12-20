<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_form";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
   die("connection fail");
}

$name = $_POST['Uname'];
$email = $_POST['Email'];
$mmsg = $_POST['msg'];

$sql = "INSERT INTO `database_table` (`name`, `email`, `message`) VALUES ('$name', '$email', '$mmsg')";

if($conn->query($sql)==true)
{
   echo "new record added";
}
else
{
   echo "Error";
}
$conn->close();


?>

<?php
require_once "db_connection.php";
$username=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

$sql="INSERT INTO student_llist(name, email, phone) VALUES ('$username','$email','$password')";
mysqli_query($conn,$sql);
echo "Data Added Sucessesfully";
?>
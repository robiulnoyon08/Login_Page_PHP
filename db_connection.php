<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbdatabaseName="data_entry";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbdatabaseName);

if(!$conn) {
    die("Connectionn Failed.");
}
?>
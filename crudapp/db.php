<?php
$servername="d4cab9dc2e30";
$username="crudapp";
$password="Mukaziber3!";
$dbname="crudapp";
//creating connection
$conn= new mysqli($servername, $username,$password,$dbname);
//test connection
if($conn->connect_error){
 die("connection failed:".$conn->connect_error);

}
?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn2 = new mysqli($servername,$username,$password,$dbname);

if($conn2->connect_error){
    die("connection failed:" .$conn2->connect_error);
}

?>
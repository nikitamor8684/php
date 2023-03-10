<?php
include "conn3.php";
$sql="INSERT INTO lgn(name,password) values('nikita','nikita') ";
// $alter="ALTER TABLE lgn ADD id int AUTO_INCREMENT='1'";
$result=mysqli_query($conn3,$sql);

?>
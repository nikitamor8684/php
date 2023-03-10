<?php
include "conn4.php";
$sql="CREATE TABLE fees(slipno int,rollno int,regisdate varchar(255),receivby varchar(255),amount varchar(255),payment varchar(255))";
// $alter="ALTER TABLE admission
// MODIFY COLUMN rollno int AUTO_INCREMENT='1' ";
$result = mysqli_query($conn4,$sql);
?>
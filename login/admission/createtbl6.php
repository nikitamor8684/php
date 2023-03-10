<?php
include "conn4.php";
$sql="CREATE TABLE admission(rollno int ,name varchar(255),fathername varchar(255),dob varchar(255),course varchar(255),mobileno varchar(255),almoblile varchar(255),photo BLOB(255),status varchar(255),doa varchar(255))";
// $alter="ALTER TABLE admission
// MODIFY COLUMN rollno int AUTO_INCREMENT='1' ";
$result = mysqli_query($conn4,$sql);
?>
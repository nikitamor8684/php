<?php
include "conn4.php";
$sql="INSERT INTO adminlogin(name,emailid,password) values('nikita','nikita@gmail.com','nikita')";
$result = mysqli_query($conn4,$sql);
?>
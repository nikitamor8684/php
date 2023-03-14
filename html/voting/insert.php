<?php
include "conn7.php";
$sql="INSERT INTO admin(username,password) values('nikita','nikita')";
$query=mysqli_query($conn7,$sql);
?>
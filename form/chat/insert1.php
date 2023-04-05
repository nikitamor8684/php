<?php
include "conn.php";
$sql="INSERT INTO  second(name,password) values('peter','peter')";
$result=mysqli_query($conn,$sql);

?>
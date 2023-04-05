<?php
include "conn.php";
$sql="INSERT INTO  first(name,password) values('john','john')";
$result=mysqli_query($conn,$sql);

?>
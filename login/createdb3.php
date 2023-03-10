<?php
include "conn3.php";
$sql="CREATE DATABASE LOGIN";
$result=mysqli_query($conn3,$sql);
if($result){
    echo "created";
}


?>
<?php

include "conn1.php";

$sql="CREATE DATABASE project";

$result = mysqli_query($conn1,$sql);

if($result){
    echo "database created";
}
?>
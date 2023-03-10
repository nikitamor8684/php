<?php


include "conn5.php";

$sql="CREATE DATABASE rating";

$result = mysqli_query($conn5,$sql);

if($result){
    echo "database created";
}
?>

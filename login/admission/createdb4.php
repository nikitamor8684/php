<?php


include "conn4.php";

$sql="CREATE DATABASE admission";

$result = mysqli_query($conn4,$sql);

if($result){
    echo "database created";
}
?>

<?php 

include "conn6.php";

$sql = "CREATE DATABASE otp";

$result = mysqli_query($conn6,$sql);

if($result){
    echo "database created!";
}



?> 



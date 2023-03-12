<?php 

include "conn7.php";

$sql = "CREATE DATABASE vote";

$result = mysqli_query($conn7,$sql);

if($result){
    echo "database created!";
}



?> 



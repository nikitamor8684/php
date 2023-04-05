<?php 

include "conn.php";

$sql = "CREATE DATABASE chat";

$result = mysqli_query($conn,$sql);

if($result){
    echo "database created!";
}



?> 



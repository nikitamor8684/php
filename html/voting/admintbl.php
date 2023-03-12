<?php

include "conn7.php";

$sql = "CREATE TABLE admin(username varchar(255),password varchar(255))";

$result = mysqli_query($conn7,$sql);

if($result){
    echo "table created!";
}



?>
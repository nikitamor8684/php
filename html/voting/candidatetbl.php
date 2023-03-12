<?php

include "conn7.php";

$sql = "CREATE TABLE candidate(symbol varchar(255),name varchar(255),sex varchar(255),age varchar(255),city varchar(255),count varchar(255))";

$result = mysqli_query($conn7,$sql);

if($result){
    echo "table created!";
}



?>
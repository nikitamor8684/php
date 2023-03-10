<?php

include "conn6.php";

$sql = "CREATE TABLE login(email varchar(255),password varchar(255),otp varchar(255))";

$result = mysqli_query($conn6,$sql);

if($result){
    echo "table created!";
}



?>
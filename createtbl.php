<?php

include "conn.php";

$sql = "CREATE TABLE students(id int, nm varchar(20))";

$result = mysqli_query($conn,$sql);

if($result){
    echo "table created!";
}



?>
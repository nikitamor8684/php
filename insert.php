<?php

include "conn.php";
$id = 3;
$nm='neha';
$sql = "INSERT INTO students VALUES('$id','$nm')";

$result = mysqli_query($conn,$sql);

if($result){
    echo "data inserted!";
}



?>
<?php
include "conn3.php";



$sql="CREATE TABLE login(id int,name varchar(255),password varchar(255))";
// $alter="ALTER TABLE login
// -- MODIFY COLUMN id varchar(255) ";
$result=mysqli_query($conn3,$sql);
// $alter1=mysqli_query($conn3,$alter);
if($result){
    echo "table created ";
}
?>
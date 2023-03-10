<?php
include "conn3.php";



$sql="CREATE TABLE lgn(id int AUTO_INCREMENT='1',name varchar(255),password varchar(255))";

$result=mysqli_query($conn3,$sql);
if($result){
    echo "table created ";
}
?>


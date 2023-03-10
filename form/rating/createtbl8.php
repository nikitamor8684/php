<?php
include "conn5.php";



$sql="CREATE TABLE rating(name varchar(255),rating varchar(255))";

$result=mysqli_query($conn5,$sql);

if($result){
    echo "table created ";
}
?>
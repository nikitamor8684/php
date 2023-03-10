<?php
include "conn4.php";



$sql="CREATE TABLE adminlogin(name varchar(255),emailid varchar(255),password varchar(255))";

$result=mysqli_query($conn4,$sql);

if($result){
    echo "table created ";
}
?>
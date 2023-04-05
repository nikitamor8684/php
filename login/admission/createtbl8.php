<?php
include "conn4.php";



$sql="CREATE TABLE diploma(rollno int(6),name varchar(255),course varchar(255),status varchar(255))";

$result=mysqli_query($conn4,$sql);
$sql1="TRUNCATE TABLE diploma";
$result1=mysqli_query($conn4,$sql1);
if($result){
    echo "table created ";
}
?>
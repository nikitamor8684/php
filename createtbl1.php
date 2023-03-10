<?php
include "conn1.php";


// $sql="CREATE TABLE STUDENT (id int AUTO_INCREMENT,name varchar(255),password varchar(255))";
$sql="CREATE TABLE RECORD (id int AUTO_INCREMENT='1',name varchar(255),email varchar(255),password varchar(255))";

$result=mysqli_query($conn1,$sql);
if($result){
    echo "table created ";
}
?>
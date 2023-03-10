<?php
include "conn2.php";
$sql="CREATE TABLE RECORD2(id int AUTO_INCREMENT='1' ,name varchar(255),email varchar(255),password varchar(255))";
$result = $conn2->query($sql);
if($result){
    echo "table created";
}
?>
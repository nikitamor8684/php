<?php
include "conn2.php";
$sql="CREATE DATABASE project1";
$result=$conn2->query($sql);
if($result){
    echo "database created";
}
?>
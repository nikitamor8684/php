<?php
include "conn.php";

$sql="CREATE TABLE second(name varchar(255),password varchar(255))";

$result=mysqli_query($conn,$sql);
if($result){
    echo "table created ";
}
?>

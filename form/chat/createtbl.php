<?php
include "conn.php";

$sql="CREATE TABLE first(name varchar(255),password varchar(255))";

$result=mysqli_query($conn,$sql);
if($result){
    echo "table created ";
}
?>

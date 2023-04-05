<?php
include "conn.php";

$sql="CREATE TABLE firstchat(id int,chat varchar(255))";

$result=mysqli_query($conn,$sql);
if($result){
    echo "table created ";
}
?>

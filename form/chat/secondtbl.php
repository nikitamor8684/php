<?php
include "conn.php";

$sql="CREATE TABLE secondchat(user2id int(6),chat varchar(255))";

$result=mysqli_query($conn,$sql);
if($result){
    echo "table created ";
}
?>

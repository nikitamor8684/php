<?php
$delete= $_GET['deleteid'];
echo "$delete";
include "conn2.php";


$sql="DELETE FROM  RECORD2 where id=$delete";


 
        if ($conn2->query($sql) === TRUE) {
  header("location:project1.php");
} 

?>
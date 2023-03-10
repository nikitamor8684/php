<?php
$delete= $_GET['deleteid'];
echo "$delete";
include "conn1.php";


$sql="DELETE FROM  RECORD where id=$delete";


// if ($conn1->query($sql) === TRUE) {
if ($conn1->query($sql) === TRUE) {

  header("location:project.php");
} 




?>
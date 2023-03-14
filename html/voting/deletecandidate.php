<?php
$delete= $_GET['deleteid'];
echo "$delete";
include "conn7.php";


$sql="DELETE FROM  candidate where candidateid=$delete";
$result=mysqli_query($conn7,$sql);


if ($result){

  header("location:displaycandidate.php");
} 




?>
<?php
$delete= $_GET['deleteid'];
echo "$delete";
include "conn7.php";


$sql="DELETE FROM  voter where voterid=$delete";
$result=mysqli_query($conn7,$sql);


if ($result){

  header("location:displayvoter.php");
} 




?>
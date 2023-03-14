<?php
include "conn7.php";

$sql="TRUNCATE TABLE votes";

$result=mysqli_query($conn7,$sql);

header('location:actions.php');

?>
<?php
include "conn1.php";
include "form.php";
// $id="";
// $name="";
$sql="TRUNCATE TABLE STUDENT";

$result=mysqli_query($conn1,$sql);

if($result){
echo "table data deleted";
}

?>
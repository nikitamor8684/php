<?php

$servername="localhost";
$username="root";
$password="";
$dbname="status";
$conn5=mysqli_connect($servername,$username,$password,$dbname);


$id=$_GET['id'];
$st=$_GET['sts'];
// $select1="SELECT * FROM nikita where id='$id'";
// $result1=mysqli_query($conn5,$select1);

    if($st=="active"){
        $st1="deactive";
    }
    else{
        $st1="active";
    }
      
    
$sql="UPDATE nikita SET status='$st1' where id='$id'";
$result=mysqli_query($conn5,$sql);
header('location:conn5.php');
?>
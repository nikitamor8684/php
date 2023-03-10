<?php  
include "conn4.php";

$ele=$_GET['rollno'];
$st=$_GET['sts'];
   echo"$ele";
   echo "$st";   
      
      
      if($st=="active"){
        $status2="deactive";
      }
      else{
        $status2="active"; 
      }
   

          $query="UPDATE  admission SET  status= '$status2' where rollno='$ele'";
          $result1=mysqli_query($conn4,$query);
          header('location:admission1.php');
  
   
?>
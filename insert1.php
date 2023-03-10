 <?php
include "conn1.php";
include "add.php";

$sql="INSERT INTO RECORD(name,email,password) values('$name','$email','$password')";

$result=mysqli_query($conn1,$sql);

// if($result){
//     echo "data inserted";
// }
// echo "$name";
?> 
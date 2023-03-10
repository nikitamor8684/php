<?php
include "conn1.php";
include "form.php";
$sql = "SELECT id,name FROM STUDENT";
$result = mysqli_query($conn1,$sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "id:".$row["id"]. "name:".$row["name"]."<br>";
    }
}

mysqli_close($conn1);

?>
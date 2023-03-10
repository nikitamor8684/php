  <?php 

include "conn.php";

$sql = "CREATE DATABASE acp";

$result = mysqli_query($conn,$sql);

if($result){
    echo "database created!";
}



?> 



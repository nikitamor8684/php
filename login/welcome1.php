<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.box{
    height:200px;
    width:200px;
    margin:200px;
    background-color:whitesmoke;
}

        </style>
</head>
<body>
<?php
include "conn3.php";

session_start();
if(isset($_SESSION['AB'])){

    echo "welcome <a href='logout'>logout</a>";
    
    $lid=$_SESSION['AB'];
    $sql="SELECT * FROM login where id='$lid'";
    $result = mysqli_query($conn3,$sql);
    echo "$lid";
//     if($result->num_rows > 0){
//         while($row=$result->fetch_assoc()){
//             echo "<div>";
//      echo $row['id'];
//      echo "<br>";
//      echo $row['name'];
//      echo "<br>";
//      echo $row['password'];
//      echo "<br>";
//      echo "</div>"; 
//     }
// }
}
?>
</body>
</html>




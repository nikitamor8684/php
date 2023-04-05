<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:black;
    }
.box{
    box-sizing:border-box;
    height:300px;
    width:48%;
padding-left:10px;
margin-bottom:80px;
    background-color:white;
    float:left;
}
.box1{
    height:300px;
    width:49%;
    box-sizing:border-box;
padding-left:10px;
margin-bottom:80px;

    background-color:white;
    float:right;

}
.p{
    font-size:30px;
}
.p1{
font-size:40px;
}
    </style>
<body>
    <?php
include "conn4.php";
session_start();
if(isset($_SESSION['ab'])){    
    $rollno=$_SESSION['ab'];
    
    $sql1="SELECT * FROM admission where rollno='$rollno' ";
$result1 = mysqli_query($conn4,$sql1);
if($result1->num_rows > 0){
    while($row=$result1->fetch_assoc()){
$name=$row['name'];

}
}
    $sql="SELECT * FROM fees where rollno='$rollno' ";
    $result = mysqli_query($conn4,$sql);
 
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            // $rollno=$row['rollno'];
            // echo "$rollno";
    //  $sname= $row['name'];
     $slipno= $row['slipno'];
     $regisdate= $row['regisdate'];
     $amount= $row['amount'];
     $receivby= $row['receivby'];
    //  $almobile= $row['almoblile'];
    }
    echo "<div class='box'>";
    echo "<p class='p1'>Office<br></p>";
    
    echo "<p class='p'>receipt no. : $slipno<br> ";
    echo "name: $name <br>";

    echo "registeration date : $regisdate <br>";
    echo "Amount : $amount <br>";
    echo "Recieved by : $receivby </p>";
echo "</div>";


echo "<div class='box1'>";
echo "<p class='p1'>Student<br></p>";

echo "<p class='p'>receipt no. : $slipno<br> ";
echo "name: $name <br>";

echo "registeration date :  $regisdate <br>";
echo "Amount : $amount <br>";
echo "Recieved by : $receivby </p>";
echo "</div><br><br>";

}

}
    ?>
    
<button onclick="print()">Print this page</button>
</body>
</html>
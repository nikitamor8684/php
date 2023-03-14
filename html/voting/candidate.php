<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-image:url('vote9.jpg');
            background-repeat:no-repeat;
            margin-left:400px;
            margin-top:100px;
            /* background-size:cover; */
        }
        label{
            font-size:20px;
            color:red;
            font-family:arial;
            font-weight:bold;
        }
        input{
            height:20px;
            width:200px;
            margin-left:10px;
            margin-top:15px;
        }
        a{
            display:inline-block;
            font-family:arial;
            font-weight:bold;
            text-decoration:none;
            color:white;
            font-size:20px;
        }
        button{
            background-color:green;
            width:100px;
        }
        </style>
</head>
<body>
    <div>
    <form action="" method="post">
<label for="symbol">Party symbol</label>
<input type="text" name="symbol"><br><br>
<label for="name">Name</label>
<input type="text" name="name"><br><br>
<label for="sex">Sex</label>
<input type="text" name="sex"><br><br>
<label for="age">Age</label>
<input type="text" name="age"><br><br>
<label for="city">City</label>
<input type="text" name="city"><br><br>
<button>Submit</button>


    </form>
</div>

<?php
include "conn7.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $symbol=$_POST['symbol'];
    $name=$_POST['name'];
    $sex=$_POST['sex'];
    $age=$_POST['age'];
    $city=$_POST['city'];
      
$sql1="SELECT * FROM candidate where symbol='$symbol'";
$result1=mysqli_query($conn7,$sql1);
if(mysqli_num_rows($result1) > 0){
    echo "candidate already exist";
    // header('location:candidate.php');
}
else{
$sql="INSERT INTO candidate(symbol,name,sex,age,city) values('$symbol','$name','$sex','$age','$city')";
$result=mysqli_query($conn7,$sql);
header('location:displaycandidate.php');  
} 
}
?>
</body>
</html>
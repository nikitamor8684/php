<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding:20px;
        }
        #submit{
            display:inline-block;
            background-color:blue;
            color:white;
            padding:10px;
            border-style:none;
            border-radius:10px;
        }
        input{
            display: inline-block;
            width:80%;
            margin:5px;
            padding:5px;
            border-style:solid;
            border-radius:10px;
        }
        </style>
</head>
<body>

  
    <form action="" method="post">
    <label for="symbol">Symbol</label>
    <input type="text" id="" name="symbol"><br><br>
    <label for="name">Name</label>
    <input type="text" id="" name="name">
    <br><br>
    <label for="sex">Sex</label>
    <input type="text" id="" name="Sex"><br><br>
    
    <label for="age">age</label>
    <input type="text" id="" name="age" >
    <br> <br>
    <label for="city">City</label>
    <input type="text" id="" name="city"><br>
    <button id="submit">Update</button> 
</form>

<?php
    include "conn7.php";
    $update= $_GET['updateid'];

include "conn7.php";
    $name=$email=$pass="";
    if ($_SERVER ['REQUEST_METHOD']=="POST"){
    $symbol=$_POST['symbol'];
    $name=$_POST['name'];
    $sex=$_POST['sex'];
    $age= $_POST['age'];
    $city=$_POST['city'];
    $sql="UPDATE candidate SET symbol='$symbol',name='$name',sex='$sex',age='$age',city='$city' where candidateid='$update'";
    $result=mysqli_query($conn7,$sql);
    
    
    if($result)
    {
        header("location:displaycandidate.php");
    }
}
   ?> 
</body>
</html>


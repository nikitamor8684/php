<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            background-image:url('vote12.jpg');
            background-repeat:no-repeat;
            margin-left:500px;
            margin-top:100px;
            height:400px;
            width:500px;
            background-size:cover;
        }
        label{
            font-size:25px;
            margin-left:40px;
            color:red;
        }
        input{
            display:inline-block;
            width:150px;
            height:30px;
margin-top:8px;
margin-left:15px;
        }
        button{
            width:80px;
            background-color:green;
            width:90px;
        }
        a{
            display:inline-block;
            text-decoration:none;
            color:white;
            font-size:20px;
        }
        </style>
</head>
<body>
    <div class="box">
        <form action="" method="post">

<label for="name">Name</label>
<input type="text" name="name"><br><br>
<label for="sex">Sex</label>
<input type="text" name="sex"><br><br>
<label for="age">Age</label>
<input type="text" name="age"><br><br>
<label for="city">City</label>
<input type="text" name="city"><br><br>
<label for="name1"> Pet Name</label>
<input type="text" name="name1"><br><br>
<button>UPDATE</button>



        </form>
</div>
<?php
    include "conn7.php";
    $update= $_GET['updateid'];


    $name=$email=$pass="";
    if ($_SERVER ['REQUEST_METHOD']=="POST"){
    $name1=$_POST['name1'];
    $name=$_POST['name'];
    $sex=$_POST['sex'];
    $age= $_POST['age'];
    $city=$_POST['city'];
    $sql="UPDATE voter SET name='$name',sex='$sex',age='$age',city='$city', petname='$name1' where voterid='$update'";
    $result=mysqli_query($conn7,$sql);
    
    
    if($result)
    {
        header("location:displayvoter.php");
    }
}
   ?> 
</body>
</html>
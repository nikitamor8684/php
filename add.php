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

<!-- <?php
        // $name=$email=$pass="";
        // if ($_SERVER ['REQUEST_METHOD']=="POST"){
        //     $name=$_POST['name'];
        //     $email=$_POST['email'];
        //     $pass=$_POST['password'];
        // }
        ?> -->
  
    <form action="" method="post">
    <label for="name">Name</label><br>
    <input type="text" id="" name="name">
    <br>
    <label for="email">Email address</label><br>
    <input type="text" id="" name="email" >
    <br>
    <label for="password">Password</label><br>
    <input type="text" id="" name="password" >
    <br> 
    <a href="project.php"><button id="submit">SUBMIT</button></a> 
</form>

<?php
    $name=$email=$pass="";
    if ($_SERVER ['REQUEST_METHOD']=="POST"){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        ?>
        <?php
        include "conn1.php";
    $sql="INSERT INTO RECORD(name,email,password) values('$name','$email','$pass')";
    $result=mysqli_query($conn1,$sql);
    header("location:project.php");
    }
    ?>
</body>
</html>


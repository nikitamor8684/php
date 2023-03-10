<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
          #box{
            height:400px;
            width:80%;
            background-color:whitesmoke;
            margin:100px;
            margin-top:300px;
            background-position:fixed;
        }
        #sign{
            width:100px;
            display: inline-block;
            background-color:blue;
            border-style:none;
            border-radius:10px;
            margin:10px;
            font-family: Arial, Helvetica, sans-serif;
font-size:25px;
        }
        h1{
            margin-left:300px;
        }
        h2{
            display: inline-block;
            margin-left:80px;
        }
        input{
            display:inline-block;
            width:50%;
            border-style:solid;
            border-width:1px;
            border-radius:10px;
            padding:10px;
        }
    </style>
<body>
<h1>Welcome to login page</h1>
    <div id="box">
        <h1>Log in</h1>
        <form action="" method="post">
            <label for="email"><h2>Enter email</h2></label>
            <input type="text" name="email" id=""><br><br>
            <label for="password"><h2>Enter password</h2></label>
            <input type="text" name="pass"><br><br>
            <label for="otp"><h2>E  nter otp</h2></label>
            <input type="text" name="otp"><br><br>
            <input type="submit" value='login' id="sign">

    </form>
</div>
<?php

            include "conn6.php";
          $password="";
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $lemail=$_POST['email'];
                $lpass=$_POST['pass'];
                $lotp=$_POST['otp'];
                $query="SELECT * FROM otp WHERE  email='$lemail' AND password='$lpass' AND otp='$lotp'" ;
                $result=mysqli_query($conn6,$query);
                if(mysqli_num_rows($result)==1){
                    $sql="INSERT INTO login(email,password,otp) values ('$lemail','$lpass','$lotp')";
                    $result=mysqli_query($conn6,$sql);
                  session_start();
                  $_SESSION['ab']="$lid";
                  header('location:welcome2.php');
            }
            else{
              echo "enter correct data";
            }
           
        }
  
           
            
    ?>
</body>
</html>
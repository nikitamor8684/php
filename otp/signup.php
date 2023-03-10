<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #box{
            height:400px;
            width:80%;
            background-color:whitesmoke;
            /* margin:200px; */
            margin-top:100px;
            background-position:fixed;
            margin-left:70px;
        }
        #sign{
            display: inline-block;
            background-color:blue;
            border-style:none;
            border-radius:10px;
            margin:10px;
            width:200px;
            font-family: Arial, Helvetica, sans-serif;
font-size:25px;
        }
        h2{
            display: inline-block;
            margin-left:80px;
        }
        input{
            padding:10px;
            width:50%;
            border-style:solid;
            border-width:1px;
            border-radius:10px;
        }
        input:submit{
            width:200px;
        }
       .nav{
background-color:wheat;
width:100%;
overflow:hidden;
        }
            a{
            display:inline-block;
            color:black;
            text-decoration:none;
            margin-left:100px;
        }
        ul{
            
        }
        li{
            list-style:none;
            float:left;
        }
        </style>
</head>
<body>
<?php
   include "conn6.php";
$username=$userpass=$useid=$error="";
if($_SERVER['REQUEST_METHOD']=="POST"){
$useremail=$_POST['useremail'];
$userpass=$_POST['userpass'];

$query="SELECT * FROM signup WHERE  password='$userpass' AND email='$useremail'";
$result=mysqli_query($conn6,$query);
if(mysqli_num_rows($result)==1){
    $error ="<b style='color:red'>this id already exist</b>";
header('location:signup.php');
}
else{
    $sql="INSERT INTO signup(email,password) values ('$useremail','$userpass')";
    $result1=mysqli_query($conn6,$sql);
    header('location:mail.php');
}
}

?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "conn6.php";
    $email=$_POST['useremail'];
    $pass=$_POST['userpass'];
    $otp=rand(100000,1000000);
    echo "$otp";
    $sql1="SELECT * FROM  signup where email='$email' AND password='$pass'";
    $result1=mysqli_query($conn6,$sql1);
    if(mysqli_num_rows($result1)==1){


    $sql="INSERT INTO otp(email,password,otp) values('$email','$pass','$otp')";
    $result=mysqli_query($conn6,$sql);
    if($result){
        echo "data entered";
    }
    session_start();
  $_SESSION['ab']=$otp;
header('location:mail.php');
}
else {
    header('location:signup.php');
}
}

?>
<nav class="nav">
    <ul>
<li><a href="#"><h1>Home</h1></a></li>
<li><a href="login1.php"><h1>Login</h1></a></li>
<li><a href="signup.php"><h1>Signup</h1></a></li>

    </ul>
 
</nav>

    <div id="box">
    <h1>Sign up</h1>
   <form action="" method="post">
    <label for="email"><h2>Enter email</h2></label>
    <input type="text" name="useremail"><br><br>
    <label for="password"><h2>Enter password</h2></label>
    <input type="text" name="userpass"><br><br>
    
    <input type="submit" value="sign up" id="sign">
   </form> 

   
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-color:black;
        }
        div{
            display:flex;
            height:300px;
            width:400px;
            background-color:whitesmoke;
            align-content:center;
            justify-content:center;
            margin:70px;
            margin-left:300px;
        }
        input{
            display:inline-block;
            margin-bottom:25px;
            border-style:solid;
            border-radius:10px;
            
        }
        h2{
            margin-left:30px;
        }
        #login{
            display:inline-block;
            background-color:blue;
            border-style:none;
            border-radius:10px;
            padding:10px;
        }
        </style>
</head>
<body>
    <div>
<form action="" method="POST">
    <h2>Admin Login</h2><br>
    <label for="name">Enter name</label>
    <input type="text" name="adminname"><br>
    <label for="emailid">Enter emailid</label>
    <input type="text" name="adminemail"><br>
    <label for="password">Enter Password</label>
    <input type="text" name="adminpass"><br>
    <input type="submit" value="login" id="login">
</form>
</div>


<?php
include "conn4.php";
$adminname=$adminemail=$adminpass="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $adminname=$_POST['adminname'];
    $adminemail=$_POST['adminemail'];
    $adminpass=$_POST['adminpass'];

    $query="SELECT * FROM adminlogin where name='$adminname' AND password='$adminpass' AND emailid='$adminemail'";
    $result= mysqli_query($conn4,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['NM']='$adminname';
        header('location:home.php');
}
}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "conn6.php";
    $email=$_POST['email'];
    $pass=$_POST['pass'];
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
//   $_SESSION['ab']=$email;

//   header('location:mail.php');
}
else {
    header('location:signup.php');
}
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
<li><a href="login1.php">login</a></li>
    </ul>
  </div>
</nav>
<form action="" method="post">
        <input type="text" name="email">
        <label for="email">enter your email</label>
        <br>
        <input type="text" name="pass">
        <label for="pass">enter your password</label>
        <br>
      
      
        
        <input type="submit" value="send otp">
    </form>


</body>
</html>
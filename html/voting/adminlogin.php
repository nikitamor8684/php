<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        #box{
            height:600px;
            width:80%;
            /* background-color:whitesmoke; */
            /* margin:200px; */
            margin-top:100px;
            background-position:fixed;
            margin-left:70px;
            background-image:url('vote6.jpg');
            background-repeat:no-repeat;
            /* background-attachment:fixed; */
            background-size:cover;
        }
       
        #ok,#back{
            display: inline-block;
            background-color:blue;
            border-style:none;
            border-radius:10px;
            margin:10px;
            width:200px;
            font-family: Arial, Helvetica, sans-serif;
font-size:25px;
margin-top:300px;
        }
        h2{
            display: inline-block;
            margin-left:80px;
        }
        input{
            padding:10px;
            width:200px;
            border-style:solid;
            border-width:1px;
            border-radius:10px;
            margin-top:40px;
        }
        input:submit{
            width:200px;
        }

   
        </style>
</head>
<body>
<?php
//    include "conn6.php";
// $username=$userpass=$useid=$error="";
// if($_SERVER['REQUEST_METHOD']=="POST"){
// $useremail=$_POST['useremail'];
// $userpass=$_POST['userpass'];

// $query="SELECT * FROM signup WHERE  password='$userpass' AND email='$useremail'";
// $result=mysqli_query($conn6,$query);
// if(mysqli_num_rows($result)==1){
//     $error ="<b style='color:red'>this id already exist</b>";
// header('location:signup.php');
// }
// else{
//     $sql="INSERT INTO signup(email,password) values ('$useremail','$userpass')";
//     $result1=mysqli_query($conn6,$sql);
//     header('location:mail.php');
// }
// }

?>
<?php
// if($_SERVER['REQUEST_METHOD']=="POST"){
//     include "conn6.php";
//     $email=$_POST['useremail'];
//     $pass=$_POST['userpass'];
//     $otp=rand(100000,1000000);
//     echo "$otp";
//     $sql1="SELECT * FROM  signup where email='$email' AND password='$pass'";
//     $result1=mysqli_query($conn6,$sql1);
//     if(mysqli_num_rows($result1)==1){


//     $sql="INSERT INTO otp(email,password,otp) values('$email','$pass','$otp')";
//     $result=mysqli_query($conn6,$sql);
//     if($result){
//         echo "data entered";
//     }
//     session_start();
//   $_SESSION['ab']=$otp;
// header('location:mail.php');
// }
// else {
//     header('location:signup.php');
// }
// }

?>

 


    <div id="box">
  
   <form action="" method="post">
    <label for="username"><h2>Enter username</h2></label>
    <input type="text" name="username"><br><br>
    <label for="password"><h2>Enter password</h2></label>
    <input type="text" name="userpass"><br><br>
    
    <input type="submit" value="ok" id="ok">
    <input type="submit" value="back" id="back">

   </form> 

   
</div>

</body>
</html>
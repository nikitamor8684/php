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
a{
    display:inline-block;
    color:black;
    text-decoration:none;   
}
   
        </style>
</head>
<body>
<?php
   include "conn7.php";
$username=$userpass="";
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$userpass=$_POST['userpass'];
echo"$username";
echo"$userpass";

$query="SELECT * FROM admin WHERE  password='$userpass' AND username='$username'";
$result=mysqli_query($conn7,$query);
if(mysqli_num_rows($result)==1){

header('location:actions.php');
}
else{
 echo"enter correct data";
}
}

?>


 


    <div id="box">
  
   <form action="" method="post">
    <label for="username"><h2>Enter username</h2></label>
    <input type="text" name="username"><br><br>
    <label for="password"><h2>Enter password</h2></label>
    <input type="text" name="userpass"><br><br>
    
    <button id="ok">ok

    </button>
   

   </form> 

   
</div>

</body>
</html>
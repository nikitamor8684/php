<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #box{
            height:200px;
            width:300px;
            background-color:whitesmoke;
            margin:200px;
            margin-left:300px;
        }
        #sign{
            display: inline-block;
            background-color:blue;
            border-style:none;
            border-radius:10px;
            margin:10px;
            font-family: Arial, Helvetica, sans-serif;
font-size:25px;
        }
        h2{
            display: inline-block;
            margin-left:80px;
        }
        </style>
</head>
<body>
<?php
   include "conn3.php";
$username=$userpass=$useid=$error="";
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$userpass=$_POST['userpass'];
$userid=$_POST['userid'];

$query="SELECT * FROM login WHERE  id='$userid'";
$result=mysqli_query($conn3,$query);
if(mysqli_num_rows($result)==1){
    // $delete="DELETE FROM login where id='$userid'";
    // $result2=mysqli_query($conn3,$delete);
    $error ="<b style='color:red'>this id already exist</b>";

}
else{
    $sql="INSERT INTO login(id,name,password) values ('$userid','$username','$userpass')";
    $result1=mysqli_query($conn3,$sql);
    header('location:login.php');
}
}

?>
    <div id="box">
    <h2>sign up</h2>
   <form action="" method="post">
    <label for="name">enter name</label>
    <input type="text" name="username"><br><br>
    <label for="password">enter password</label>
    <input type="text" name="userpass"><br><br>
    <label for="id">enter emailid</label>
    <input type="text" name="userid">
    <br>
    <input type="submit" value="sign up" id="sign">
   </form> 
   <?php
echo "$error";
   ?>
</div>

</body>
</html>
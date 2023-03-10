
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
        #update{
            display:inline-block;
            background-color:blue;
            color:white;
            padding:10px;
            border-style:none;
            border-radius:10px;
            width:10%;
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
<?php
include "conn1.php";
    $update= $_GET['updateid'];
     $sql = "SELECT * FROM RECORD WHERE id=$update";
     $result = mysqli_query($conn1,$sql);
     
     if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             $pname=$row['name'];
             $ppass=$row['password'];
             $pemail=$row['email'];
         }
        }
?>
    <form action="" method="post">
    <label for="name">Name</label><br>
    <input type="text" id="" name="name" value="<?php echo $pname ?>">
    <br>
    <label for="email">Email address</label><br>
    <input type="text" id="" name="email" value="<?php echo $pemail ?>">
    <br>
    <label for="password">Password</label><br>
    <input type="text" id="" name="password" value="<?php echo $ppass ?>">
    <br>
    
    
    
    <input  type="submit" value="update" id="update">
</form>
<?php
    include "conn1.php";
    $name=$email=$pass="";
    if ($_SERVER ['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $update= $_GET['updateid'];
    $sql="UPDATE RECORD SET name='$name',email='$email',password='$pass' where id='$update'";
    $result=mysqli_query($conn1,$sql);
    
    
    if($result)
    {
        header("location:project.php");
    }
}
   ?> 


</body>
</html>


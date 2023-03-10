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
            height:250px;
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
<body>
<?php
            $lname=$lpass=$lid="";
            include "conn3.php";
            // $lname=$_POST['name'];
            //     $lpass=$_POST['pass'];
            //     $lid=$_POST['id'];
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $lname=$_POST['name'];
                $lpass=$_POST['pass'];
                $lid=$_POST['id'];
                $query="SELECT * FROM login WHERE  id='$lid' AND name='$lname' AND password='$lpass'" ;
                $result=mysqli_query($conn3,$query);
                if(mysqli_num_rows($result)==1){
                  session_start();
                  $_SESSION['AB']="$lid";
                  header('location:welcome1');
            }
            else{
                header('location:signup');
            }
           
        }

           
            
    ?>
    <div id="box">
        <h2>log in</h2>
        <form action="" method="post">
            <label for="name">enter name</label>
            <input type="text" name="name" id=""><br><br>
            <label for="password">enter password</label>
            <input type="text" name="pass"><br><br>
            <label for="id">enter id</label>
            <input type="text" name="id"><br><br>
            <input type="submit" value='login' id="sign">

    </form>
</div>

</body>
</html>
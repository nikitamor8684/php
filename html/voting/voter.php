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
            margin-top:0px;
            background-position:fixed;
        }
        form{
            background-image:url('vote4.jpg');
            background-repeat:no-repeat;
            background-size:cover;
        }
        #next,#back{
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

    <div id="box">
   
        <form action="" method="post">
            <label for="voter"><h2>Enter voter id</h2></label>
            <input type="text" name="voterid" id=""><br><br>
            <label for="name"><h2>Enter name</h2></label>
            <input type="text" name="name"><br><br>
            <label for="sex"><h2>Enter sex</h2></label>
            <input type="text" name="sex"><br><br>
            <label for="age"><h2>Enter age</h2></label>
            <input type="text" name="age"><br><br>
            <label for="city"><h2>Enter city</h2></label>
            <input type="text" name="city"><br><br>
            <input type="submit" value='next' id="next">
            <input type="submit" value='back' id="back">


    </form>
</div>
<?php

            include "conn7.php";
          $password="";
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $lvoterid=$_POST['voterid'];
                $lname=$_POST['name'];
                $lsex=$_POST['sex'];
                $lage=$_POST['age'];
                $lcity=$_POST['city'];

            //     $query="SELECT * FROM otp WHERE  email='$lemail' AND password='$lpass' AND otp='$lotp'" ;
            //     $result=mysqli_query($conn6,$query);
            //     if(mysqli_num_rows($result)==1){
            //         $sql="INSERT INTO login(email,password,otp) values ('$lemail','$lpass','$lotp')";
            //         $result=mysqli_query($conn6,$sql);
            //       session_start();
            //       $_SESSION['ab']="$lid";
            //       header('location:vote.php');
            // }
            // else{
            //   header('location:registeration.php');
            // }
           
        }
  
           
            
    ?>
</body>
</html>
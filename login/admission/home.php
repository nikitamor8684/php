<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
    <style>
        *{
            box-sizing:border-box;
            margin:0px;
            padding:0px;
        }
     body{
        background-image:url('cmp1.jpg');
        background-repeat:no-repeat;
        background-size:100vh 100;
        background-size:cover;
        height:100vh;
        background-attachment:fixed;
     }
        div.ab{
            overflow:hidden;
        }
        li:hover{
            background-color:#05445E;
        }
        li{
            float:left;
            padding:9px 60px;
            list-style:none;
        }
        div.nav{
            display:inline-block;
            overflow:hidden;
            background-color:#013B45;
            width:100%;
        }
    
        .std{
            display:inline-block;
            color:white;
            text-decoration:none;
            font-size:30px;
            margin-top:30px;
        }
        div.parent_box{
           overflow:hidden;
            width:100%;
            display:flex; 
            flex-direction:row;
            flex-wrap:wrap;
             float:left; 
        }
        img{
            height:100px;
            width:100px;
            margin:0px;
            border-style:solid;
            border-color:white;
            border-width:2px;
            border-radius:50px;
        }
        .box{
            box-sizing:border-box;
            padding:20px;
            display:inline-block;
            width:150px;
            height:170px;
            background-color:#05445E;
            margin:100px;
            color:white;
            font-size:20px;
         box-shadow:0px 0px 12px white;
         z-index:1;

        }
      
        .bi{
            display:inline-block;
            color:white;
            cursor:pointer;
            background-color:red;
        }
        .courses{
            margin:20px;
            margin-left:80px;
            float:left;
        }
        .fees{
            float:right;
            margin-top:20px;
            margin-right:80px;
        }
    .student{
        background-color:white;
        /* overflow:hidden; */
        overflow-x:scroll;
        overflow-y:scroll;
    }
        /* input:checked~div.nav{
            width:20%;
        }
        input:checked~div.parent_box{
            width:80%;
        }  */
        @media(max-width:600px){
            li{
width:100%;
padding-left:130px;
            }
            .box{
                margin-top:40px;
                margin-left:150px;
            }
            .courses{
                margin:0px;
                clear:both;
            }.fees{
                margin:0px;
                clear:both;
            }
        }

        </style>
</head>

<body>

<?php

include "conn4.php";
$sql="SELECT rollno FROM admission";
$result=mysqli_query($conn4,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
$rollno=$row['rollno'];
echo "<br>";
 $max=(max([$rollno]));
    }}
 
    $date=date("Y/m/d");
        $sql1="SELECT sum(amount) as amt FROM fees where regisdate='$date'";
        $result1=mysqli_query($conn4,$sql1);
        if(mysqli_num_rows($result1)>0){
            while($row=mysqli_fetch_assoc($result1)){
        $amount=$row['amt'];
            }}
       
            
            $sql2="SELECT count(status) as cnt FROM admission where status='active'";
            $result2=mysqli_query($conn4,$sql2);
            if(mysqli_num_rows($result2)>0){
                while($row=mysqli_fetch_assoc($result2)){
                $active=$row['cnt'];
            }}
        
                    
       ?>
 
        
       
        <div class="ab nav">
            <ul>
                <li><img src="acp.jpg"></li>
           <li> <a href="admission.php" class="std">admission</a></li>
           <li> <a href="fees.php" class="std">Fees receipt</a> </li>
           <li> <a href="fees1.php" class="std">Fees</a> </li>
            <li><a href="admission1.php" class="std">students</a></li>
        </ul>
        </div>
        </div>
<div class="ab parent_box">
 
<a href="#">
    <span class="box">
        Active Student
        <?php
echo "$active";
        ?>
    </span></a>
   <a href="#"> <span class="box">
        Total Students
        <?php
echo "$max";
        ?>

    </span></a>
   <a href="#"> <span class="box">
        Total Amount Received Today 
        <?php
echo "$amount";
        ?>
    </span></a>
    </div>

    
    <div class="student">
<?php
// include "admission1.php";
?>
        </div>
        <div class='courses'>
            <h1 style="color:white">Courses</h1>
            <h3>Basics of computer</h3>
            <h3>Typing</h3>
            <h3>Steno</h3>
            <h3>Web designing</h3>
            <h3>C,C++,Java</h3>
            <h3>Tally</h3>
            <h3>Autocad</h3>
            <h3>English Speaking</h3>
            <h3>Coaching for govt. jobs</h3>
          

        </div>
        <div class="fees">
        <h1 style="color:white">Fees</h1>
            <h3>Basics of computer </h3>
            <h3>Typing</h3>
            <h3>Steno</h3>
            <h3>Web designing</h3>
            <h3>C,C++,Java</h3>
            <h3>Tally</h3>
            <h3>Autocad</h3>
            <h3>English Speaking</h3>
            <h3>Coaching for govt. jobs</h3>
</body>


     
</html>
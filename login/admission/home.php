<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
    <style>
        *{
            box-sizing:border-box;
            margin:0px;
            padding:0px;
        }
     body{
        /* background-image:url('cmp1.jpg'); */
        /* background-repeat:no-repeat; */
        /* background-size:100vh 100;
        background-size:cover;
        height:100vh;
        background-attachment:fixed; */
        background-color:#013B45;
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
    
        .std,.std1{
            display:inline-block;
            color:white;
            text-decoration:none;
            font-size:30px;
            margin-top:30px;
        }

     
     
        .sidebar{
            height:700px;
            width:0%;
            background-color:#05445E;
            float:left;
            transition-duration:4s;
            color:#05445E;
            display:none;
        }
        div.parent_box{
           overflow:hidden;
            width:100%;
            display:flex; 
            flex-direction:row;
            flex-wrap:wrap;
             float:right; 
        }
       .img2{
            display:inline-block;
            height:100px;
            width:100px;
            margin:0px;
            border-style:solid;
            border-color:white;
            border-width:2px;
            border-radius:50px;
        }
        .img1{
            height:500px;
            width:500px;
            float:right;
            border-style:solid;
            border-color:#013B45;
            border-width:2px;
            border-radius:10px;
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
         transition-duration:4s;
         border:1px solid blue;
         border-radius:10px;

        }
   
        .bi{
            display:inline-block;
            color:white;
            cursor:pointer;
            height:50px;
            width:50px;
            background-color:#013B45;
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
        .btn{
            box-sizing:border-box;
            margin-top:100px;
            margin-right:450px;
         box-shadow:0px 0px 12px white;
            background-color:rgb(230,10,10);

        }h1{
            color:white;
        }
        p{
            color:white;
        }
        .box1{
            /* height:200px;
            width:40%; */
            float:right;
        }
        .box1a{
         
            float:left;
          
        }
        .box1b{
            float:right;
        } 

    input{
display:none;
    }
        input:checked~div.sidebar{
            width:20%;
            display:block;
            /* transition-duration:4s; */

        }
        input:checked~div.parent_box{
            width:80%;
        } 
        /* input:checked~div.side{
            display:inline-block;
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
            <ul class="list1">
                <li><img src="acp.jpg" class="img2" ></li>
           <li> <a href="admission.php" class="std">admission</a></li>
           <li> <a href="fees1.php" class="std">Fees</a> </li>
           <li><a href="admission1.php" class="std">students</a></li>
        
        </ul>
        </div>
     
 <label for="icon">
            <i class="bi bi-list"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg></label>
            <input type="checkbox" id="icon">

        <div class="sidebar">
            <ul>
                
         
           <li> <a href="admission.php" class="std1">admission</a></li>
      
           <!-- <li> <a href="fees.php" class="std">Fees receipt</a> </li> -->
           <li> <a href="fees1.php" class="std1">Fees</a> </li>
     
            <li><a href="admission1.php" class="std1">students</a></li>
            <li><a href="diploma.php" class="std">Diploma</a></li>
     
        </ul>
        </div>
        <div class="box1">
            <div class="box1a">
        <a href="admission.php"><button type="submit" class="btn btn-primary">Admission</button></a><br><br>
       <h1> Admission Now</h1>
       <p>
Hello there sit amet consectetur adipisicing elit. <br>
Nihil, iusto? Dignissimos sit facere placeat pariatur <br>
aut numquam totam alias tempore!
        </p>
        </div><div class="box1b">
        <img src="acp1.png" height="500px" width="500px" class="img1">
        </div>
        </div>
<div class="ab parent_box">
<a href="#">
 

<div data-aos="zoom-in" class="box">
Active Student
<?php
echo "$active";

        ?>
    </div></a>
   <a href="#"><div data-aos="zoom-in" class="box">
        Total Students
        <?php
echo "$max";
        ?>

        </div></a>
   <a href="#"> <div data-aos="zoom-in" class="box">
        Total Amount Received Today 
        <?php
echo "$amount";
        ?>
    </div></a>
    

    
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

            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
  AOS.init();
</script>
</body>


     
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:black;
        }
        .box{
            height:100vh;
            width:80%;
            background-color:white;
            margin-left:100px;
           
        }
        .content{
            
            margin-left:350px;
            box-sizing:border-box;
            height:400px;
            background-color:white;
        }
        h1{
            display:inline-block;
            font-size:40px;
        }
        h2{
            display:inline-block;
            margin-left:100px;
            font-size:30px;
        }
        h3{
            display:inline-block;
            margin-left:40px;
            font-size:30px;
        }
        img{
            height:100px;
            width:100px;
            border-style:solid;
            border-color:white;
            border-radius:50px;
            border-width:2px;
            margin-left:500px;
        }
        #a{
            display:inline-block;
            margin-left:70px;
        }
    
        a{
            display:inline-block;
            color:white;
            text-decoration:none;
            background-color:blue;
            
        }
        button{
          
            display:inline-block;
            background-color:blue;
            font-size:20px;
            color:white;
            border-style:solid;
            border-color:blue;
            border-width:2px;
            border-radius:10px;
            margin-left:1100px;
            box-shadow:0px 0px  12px white;
        }
    </style>
</head>
<body>
<?php
include "conn4.php";

session_start();
if(isset($_SESSION['NM'])){    
    $rollno=$_SESSION['NM'];
    echo "$rollno";
    $sql="SELECT * FROM admission where rollno='$rollno' ";
    $result = mysqli_query($conn4,$sql);
    if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            $rollno=$row['rollno'];
     $name= $row['name'];
     $course= $row['course'];
  echo "$rollno";
$sql1="INSERT INTO diploma(rollno,name,course,status) values('$rollno','$name','$course','isssued')";
$result1=mysqli_query($conn4,$sql1);

    }
    // session_destroy();
}
 else{
    echo "you have not taken admission in any course yet";
 }

}

    ?>


    <div class="box">
        <img src="acp.jpg"><br>
        <div class="content">
        <h1>Certificate of Completion</h1><br>
        <p id="a">This certifies that</p><br>
        <h2><?php echo "$name"?></h2>
        <p>
            has completed the neccesary courses and passed<br>
             the ACP <?php echo "$course"?> exam is hereby declared a</p>
            <h3> certified <?php echo "$course" ?><br></h3>
            <p>
             with fundamental knowledge of <?php echo "$course"?> 
             is issued
             
        </p>
    </div>
</div>
<button type="submit" class="btn btn-primary"><a href='diploma1.php'>Issue</a></button>


</body>
</html>
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
   
        body{
            display:flex;
            align-content:center;
            justify-content:center;
            background-color:#013B45;
            
        }
        form{
            background-color:#700D2D;
            margin:20px;
            padding:20px;
            width:80%;
            color:green;
            font-size:20px;
            
        }
        .box{
            height:100%;
            width:80%;
            margin-left:50px;
        }
        input{
            display:inline-block;
            margin:10px;
            width:500px;
            border-style:solid;
            border-radius:10px;
            padding:2px;
        }
        h1{
            display:inline-block;
            margin-left:200px;
        }
        button{
            background-color:blue;
            border-style:none;
            border-radius:10px;
            padding:5px;
            color:white;
        }
        #submit{
            background-color:#013B45;
            padding:7px;
            color:white;
        }
      @media(max-width:600px){ 
        h1{
margin-left:100px;
      }
        input{
            width:300px;
        }
      }
        </style>
</head>
<body>
    <!-- <form action="" method="POST" enctype="multipart/form-data">
        <h1>Admission Form</h1>
        <br>
   
        <label for="name">Enter student name</label>
        <input type="text" name="sname"><br>
        <label for="name">Enter father,s  name</label>
        <input type="text" name="fname"><br>
        <label for="dob">Enter date of birth</label>
        <input type="date" name="dob"><br>
        <label for="course">Enter course name</label>
        <input type="text" name="course"><br>
        <label for="mob.">Enter mobile no.</label>
        <input type="text" name="mob"><br>
        <label for="almob.">Enter alternative mobile no.</label>
        <input type="text" name="almob"><br>
        <label for="photo">Photo</label>
        <input type="file" name="photo" value=""/><br>
        <p name="status">status:active</p>
     <label for="doa">Date of admission<label>
     <input type="text" name="doa" id="dat" value=""><br>
     
     <input type="submit" id="submit">
     
</form> -->

<?php
include "conn4.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
$sname=$fname=$dob=$course=$mob=$almob=$sphoto=$doa="";
    $sname=$_POST['sname'];
    $fname=$_POST['fname'];
    $dob=$_POST['dob'];
    $course=$_POST['course'];
    $mob=$_POST['mob'];
    $almob=$_POST['almob'];
    $doa=$_POST['doa'];
    $target_dir = "image/";
    $target_file = $target_dir.basename($_FILES["sphoto"]["name"]);
    move_uploaded_file($_FILES["sphoto"]["tmp_name"], $target_file);
    $sql="INSERT INTO admission(name,fathername,dob,course ,mobileno,almoblile,photo,status,doa) values('$sname','$fname','$dob','$course','$mob','$almob','$target_file','active','$doa')";
    $result=mysqli_query($conn4,$sql);
    
    $_SESSION['AB']="$mob";   
    header("location:fees.php");
}
   

?>

<div data-aos="flip-left" class="box">
<form action="" method="POST" enctype="multipart/form-data">
<h1>Admission Form</h1>
        <br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter student name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sname">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Father's name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="fname">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter date of birth</label>
      <input type="date" class="form-control" id="exampleCheck1" name="dob">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter Course name</label>
      <input type="text" class="form-control" id="exampleCheck1" name="course">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter mobile no.</label>
      <input type="text" class="form-control" id="exampleCheck1" name="mob">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter  alternate mobile no.</label>
      <input type="text" class="form-control" id="exampleCheck1" name="almob">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Photo</label>
      <input type="file" class="form-control" id="exampleCheck1" name="sphoto">
  </div>
  <p name="status">status:active</p>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Date of admission</label>
      <input type="text" class="form-control" id="dat" name="doa" value="">
  </div>
  <input type="submit" class="btn btn-primary" value="submit">
</form>
    </div>






    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>




<script>
    // function func(){
        const d=new Date();
        var day=d.getDate();
        console.log(day);
        var month=d.getMonth()+1;
        const year=d.getFullYear();
        if(month<10){
            month="0"+month;
        }
        if(day<10){
            day="0"+day;
        }
        const date=year+"/"+month+"/"+day;
        console.log(date);
        // return date;
    // }
    document.getElementById('dat').value=date;
    </script>


</body>

    
</html>

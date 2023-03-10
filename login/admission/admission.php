<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <form action="" method="POST" enctype="multipart/form-data">
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
        <input type="file" name="sphoto" value=""/><br>
        <p name="status">status:active</p>
     <label for="doa">Date of admission<label>
     <input type="text" name="doa" id="dat" value=""><br>
     
     <input type="submit" id="submit">
     
</form>

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
    $sphoto=$_POST['sphoto'];
    $doa=$_POST['doa'];
    $target_dir = "image/";
    $target_file = $target_dir.basename($_FILES["sphoto"]["name"]);
    move_uploaded_file($_FILES["sphoto"]["tmp_name"], $target_file);
    // $_FILES['sphoto']['20px'];
    $sql="INSERT INTO admission(name,fathername,dob,course ,mobileno,almoblile,photo,status,doa) values('$sname','$fname','$dob','$course','$mob','$almob','$target_file','active','$doa')";
    $result=mysqli_query($conn4,$sql);
    session_start();
    $_SESSION['AB']="$mob";   
    header('location:fees.php');
  }
    

?>
</body>

    
</html>

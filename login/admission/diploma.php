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
        a{
            display:inline-block;
            color:white;
            text-decoration:none;
        }
     
    </style>
</head>
<body>

    <form action="" method="post">
        <h2 align="center">Fill details to issue Diploma</h2>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter rollno</label>
      <input type="text" class="form-control" id="exampleCheck1" name="rollno">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter Course name</label>
      <input type="text" class="form-control" id="exampleCheck1" name="course">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php
include "conn4.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $course=$_POST['course'];
session_start();
$_SESSION['NM']=$rollno;
echo "$rollno";
header('location:issuediploma.php');
if(ISSET($_SESSION['NM'])){
    echo "session set";
}
else{
    echo "error";
}
}
    ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body{
            display:flex;
            align-content:center;
            justify-content:center;
            background-color:#305419;
        }
        form{
            background-color:teal;
            margin:20px;
            padding:20px;
        }
        .a{
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
        }.box{
            height:100%;
            width:80%;
        }
        button{
            background-color:blue;
            border-style:none;
            border-radius:10px;
            padding:5px;
            color:white;
        }
        #submit{
            background-color:#305419;
            padding:7px;
            color:white;
        }
        @media(max-width:600px){ 
        h1{
margin-left:100px;
      }
        .a{
            width:300px;
        }
      }
        </style>
</head>
<body>
    <?php
    include "conn4.php";
    session_start();
    if(isset($_SESSION['AB'])){    
        $mob=$_SESSION['AB'];
        $sql="SELECT * FROM admission where mobileno='$mob' ";
        $result = mysqli_query($conn4,$sql);
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $rollno=$row['rollno'];
         $sname= $row['name'];
         $fname= $row['fathername'];
         $dob= $row['dob'];
         $course= $row['course'];
         $mob= $row['mobileno'];
         $almobile= $row['almoblile'];
         $doa= $row['doa']; 
        }
    }

    }
    
    ?>
 <?php
include "conn4.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
        $rollno=$_POST['rollno'];
        $doa=$_POST['doa'];
        $rname=$_POST['rname'];
        $amount=$_POST['amount'];
        $payment=$_POST['online'];

        $sql="INSERT INTO fees(rollno,regisdate,receivby,amount,payment) values('$rollno','$doa','$rname','$amount','$payment')";
        $result=mysqli_query($conn4,$sql);
        
        $_SESSION['ab']="$rollno";   
        header('location:slip.php');
    }
        
    
    ?>

<div data-aos="flip-left" class="box">
<form action="" method="POST">
<h1>Fees Receipt</h1>
        <br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter rollno</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="rollno" value="<?php echo $rollno?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter student name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="sname" value="<?php echo $sname?>">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter father's name</label>
      <input type="text" class="form-control" id="exampleCheck1" name="fname" value="<?php echo $fname?>">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter date of birth</label>
      <input type="date" class="form-control" id="exampleCheck1" name="dob" value="<?php echo $dob?>">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter Course name</label>
      <input type="text" class="form-control" id="exampleCheck1" name="dob" value="<?php echo $course ?>">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter mobile no.</label>
      <input type="text" class="form-control" id="exampleCheck1" name="mob" value="<?php echo $mob?>">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter  alternate mobile no.</label>
      <input type="text" class="form-control" id="exampleCheck1" name="almob" value="<?php echo $almobile?>">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Enter registeration date</label>
      <input type="text" class="form-control" id="exampleCheck1" name="doa" value="<?php echo $doa?>">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Received By</label>
      <input type="text" class="form-control" id="exampleCheck1" name="rname">
  </div>
  <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Amount</label>
      <input type="text" class="form-control" id="exampleCheck1" name="amount">
  </div>
Payment method:
  <div class="mb-3 form-check">
      <input type="radio" class="form-check-input" id="dat" name='online' value="online">
      <label class="form-check-label" for="exampleCheck1">Online</label>
</div>
<div class="mb-3 form-check">

      <input type="radio" class="form-check-input" id="dat" name='online' value="cash">
      <label class="form-check-label" for="exampleCheck1">Cash</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

            
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>

</body>
</html>
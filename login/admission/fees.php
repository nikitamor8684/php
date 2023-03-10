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
        $sql="SELECT * FROM admission ";
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
    <form action="" method="POST">
        <h1>Fee</h1>
        <br>
        <label for="name">Enter rollno</label>
        <input type="text" name="rollno" class="a" value="<?php echo $rollno?>"><br>
        <label for="name">Enter student name</label>
        <input type="text" name="sname" class="a" value="<?php echo $sname?>"><br>
        <label for="name">Enter father's  name</label>
        <input type="text" name="fname" class="a" value="<?php echo $fname?>"><br>
        <label for="dob">Enter date of birth</label>
        <input type="date" name="dob" class="a" value="<?php echo $dob?>"><br>
        <label for="course">Enter course name</label>
        <input type="text" name="course" class="a" value="<?php echo $course?>"><br>
        <label for="mob.">Enter mobile no.</label>
        <input type="text" name="mob." class="a" value="<?php echo $mob ?>"><br>
        <label for="almob.">Enter  alternate mobile no.</label>
        <input type="text" name="almob." class="a" value="<?php echo $almobile ?>"><br>
        <label for="red">Enter registeration date</label>
        <input type="text" name="red" class="a" value="<?php echo $doa?>"><br>
        <label for="rname">Received by</label>
        <input type="text" name="rname" class="a"><br>
        <label for="amount">Amount</label>
        <input type="text" name="amount" class="a" ><br>
        Payment method:
        <input type="radio" name="online" value="online">
        <label for="online">Online</label>
        <input type="radio" name="online" value="cash">
        <label for="cash">Cash</label><br>
        <input type='submit' id='submit' class='a'>
</form>
<?php
include "conn4.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
        $rollno=$_POST['rollno'];
        $red=$_POST['red'];
        $rname=$_POST['rname'];
        $amount=$_POST['amount'];
        $payment=$_POST['online'];

        $sql="INSERT INTO fees(rollno,regisdate,receivby,amount,payment) values('$rollno','$red','$rname','$amount','$payment')";
        $result=mysqli_query($conn4,$sql);
        // session_start();
        // $_SESSION['AB']="$mob";   
        header('location:home.php');
      }
        
    
    ?>
            


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #add{
            display: inline-block;
            background-color: blue;
            color:white;
            padding:15px;
            border-style:none;
            border-radius: 10px;
            margin:40px;
        }
        th{
            font-weight:bold;
            font-size:25px;
        }
        .delete{
            display: inline-block;
            background-color: red;
            color:white;
            padding:15px;
            border-style:none;
            border-radius: 10px; 
        }
        .update{
            display: inline-block;
            background-color: blue;
            color:white;
            padding:15px;
            border-style:none;
            border-radius: 10px;  
        }
    </style>
</head>
<body>
   


 
    <table border="0" cellspacing="0" cellpadding="0" width="90%">
        <tr>
            <th>#</th>
            <th>PARTY NAME</th>
            <th>TOTAL VOTES</th>
         
        </tr>
         <?php
     include "conn7.php";
     
     $sql = "SELECT * FROM candidate";
     $result = mysqli_query($conn7,$sql);
    

     if($result){
         while($row=mysqli_fetch_assoc($result)){
             echo "<tr>";
             $id=$row['candidateid'];
             $symbol=$row['symbol'];
             $sql1="SELECT * FROM votes where partyname='$symbol'";
             $result1=mysqli_query($conn7,$sql1);
            $votes= mysqli_num_rows($result1);
         if($result1){
             echo"<td>".$row['candidateid']."</td>";

             echo"<td>".$row['symbol']."</td>";
             echo"<td>".$votes."</td>";
           echo "</tr>"; 
         }
        }    
    }
         
     mysqli_close($conn7);
     ?>
    
    </table> 
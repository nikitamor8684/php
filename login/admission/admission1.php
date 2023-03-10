<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .add{
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
    
        tr:nth-child(even){
            background-color:green;
        }
   tr:nth-child(odd){
    background-color:red;
   }
   tr:hover{
    background-color:yellow;
   }
    </style>
</head>
<body>
   

    <a href="admission.php"> <button class="add">ADD</button> </a>
    <table border="1" cellspacing="0" cellpadding="0" width="90%" align="center"s>
        <tr>
            <th>roll no.</th>
            <th>NAME</th>
            <th>fathername</th>
            <th>course</th>
            <th>date of birth</th>
            
            <th>mobile no.</th>
            <th>alternate mobile no.</th>
            <th>Photo</th>
            <th>status</th>
            <th>date of admission</th>
            <th>change status</th>
        </tr>
         <?php
     include "conn4.php";
     
     $sql = "SELECT * FROM admission";
     $result = mysqli_query($conn4,$sql);
     
     if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             echo "<tr>";
             $rollno=$row['rollno'];
             echo"<td class='td'>".$row['rollno']."</td>";
             echo"<td>".$row['name']."</td>";
            echo"<td>".$row['fathername']."</td>";
            echo"<td>".$row['course']."</td>";
            echo"<td>".$row['dob']."</td>";
            echo"<td>".$row['mobileno']."</td>";
            echo"<td>".$row['almoblile']."</td>";
            echo"<td>";
           echo "<img src=". $row['photo']." height='50px' width='50px'>";
            echo "</td>";
            echo"<td>".$row['status']."</td>";
            echo"<td>".$row['doa']."</td>";

            echo "<td>";
        //    echo "<a href='status.php?statusid=$rollno'>";
        //     echo "<input type='button' class='update' value='activate' name='status1'";
        //    echo "</a>";
           
           if($row['status']=='active'){
              $st='deactive';
           }
           else{
              $st='active';
           }
           echo "<a href=status.php?rollno=".$row['rollno']."&sts=".$row['status'].">";
           echo "<input type='button' class='update' value='$st' name='status1'";

           echo"</a><br>";
              }
        
           echo "</td>"; 
           echo "</tr>"; 
   
        }    
    
         
     mysqli_close($conn4);
     ?>
    
    </table> 
         </body>
</html>

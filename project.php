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
   

    <a href="add.php"> <button id="add">ADD</button> </a>
 
    <table border="0" cellspacing="0" cellpadding="0" width="90%">
        <tr>
            <th>#</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th> </th>
        </tr>
         <?php
     include "conn1.php";
     
     $sql = "SELECT * FROM RECORD";
     $result = mysqli_query($conn1,$sql);
     
     if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             echo "<tr>";
             $id=$row['id'];
             echo"<td>".$row['id']."</td>";
             echo"<td>".$row['name']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td>".$row['password']."</td>";
            echo "<td>";
           echo "<a href='update.php?updateid=$id'>";
            echo "<button  class='update'>Update</button>";
           echo "</a>";
           echo "<a href='delete.php?deleteid=$id'>";
            echo "<button  class='delete'>Delete</button>";
           echo "</a>";
           echo "</td>"; 
           echo "</tr>"; 
   
        }    
    }
         
     mysqli_close($conn1);
     ?>
    
    </table> 
         </body>
</html>

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
            background-color:#187763;
        }
   tr:nth-child(odd){
    background-color:#771B0C;
   }
   tr:hover{
    background-color:yellow;
   }
   .a{
    margin-left:10px;
    box-sizing:border-box;
   }
    </style>
</head>
<body>
   

    <!-- <a href="admission.php"> <button class="add">ADD</button> </a> -->
    <table border="1" cellspacing="0" cellpadding="0" width="90%" align="center">
        <tr>
            <th>slip no.</th>
            <th>roll no.</th>
            <th>registeration date</th>
            <th>received by</th>
            <th>amount</th>
            <th>payment</th>
        </tr>
         <?php
     include "conn4.php";
     
     $sql = "SELECT * FROM fees";
     $result = mysqli_query($conn4,$sql);
     
     if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             echo "<tr>";
        //     //  $rollno=$row['rollno'];
             echo"<td class='a'>".$row['slipno']."</td>";
             echo"<td class='a'>".$row['rollno']."</td>";
            echo"<td class='a'>".$row['regisdate']."</td>";
            echo"<td class='a'>".$row['receivby']."</td>";
            echo"<td class='a'>".$row['amount']."</td>";
            echo"<td class='a'>".$row['payment']."</td>";
          

            
        echo "</tr>"; 
    }    
    // echo "</table>";
    }
         
     mysqli_close($conn4);
     ?>
    
    </table> 
         </body>
</html>

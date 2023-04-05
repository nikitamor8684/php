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
        .box{
            height:100%;
            width:100%;
        }
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
    
        /* tr:nth-child(even){
            background-color:green;
        }
   tr:nth-child(odd){
    background-color:red;
   }
   tr:hover{
    background-color:yellow;
   } */
    </style>
</head>
<body>
   

    <a href="diploma.php"> <button class="add">ISSUE</button> </a>
    <!-- <table border="1" cellspacing="0" cellpadding="0" width="90%" align="center"s> -->
    <div data-aos="fade-up"
     data-aos-duration="3000" class="box">

    <table class="table table-striped">
  

        <tr>
            <th>roll no.</th>
            <th>NAME</th>
            <th>course</th>
            <th>status</th>

        </tr>
         <?php
     include "conn4.php";
     
     $sql = "SELECT * FROM diploma";
     $result = mysqli_query($conn4,$sql);
     
     if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             echo "<tr>";
             $rollno=$row['rollno'];
             echo"<td class='td'>".$row['rollno']."</td>";
             echo"<td>".$row['name']."</td>";
         
            echo"<td>".$row['course']."</td>";
    
            echo"<td>".$row['status']."</td>";
      
            echo "<td>";
        //    echo "<a href='status.php?statusid=$rollno'>";
        //     echo "<input type='button' class='update' value='activate' name='status1'";
        //    echo "</a>";
        
           echo "</tr>"; 

        }  
        
    }  

     mysqli_close($conn4);
     ?>
    
    </table> 
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
         </body>
</html>

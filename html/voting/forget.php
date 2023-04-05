<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .vote{
            background-color:blue;
            font-size:20px;
            border-style:solid;
            border-color:blue;
            border-width:1px;
            border-radius:10px;
            padding:5px;
        }
        </style>
</head>
<body>
    <form action="" method="post">
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="city">City</label>
    <input type="text" name="city">
    <label for="petname">Pet Name</label>
    <input type="text" name="petname">
    <button>find</button>
    </form>
<table border="0" cellspacing="0" cellpadding="0" width="90%">
        <tr>
            <th>#</th>
            <th>NAME</th>
            <th>SEX</th>
            <th>AGE</th>
            <th>CITY</th>
            <th>Pet name</th>
            <th>Vote</th>
        </tr>
        <?php
        include "conn7.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $city=$_POST['city'];
    $petname=$_POST['petname'];
$sql="SELECT *  FROM voter where name='$name' AND city='$city' AND petname='$petname'";
$result=mysqli_query($conn7,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        $id=$row['voterid'];
        echo"<td align='center'>".$row['voterid']."</td>";
     
        echo"<td align='center'>".$row['name']."</td>";
       echo"<td align='center'>".$row['sex']."</td>";
       echo"<td align='center'>".$row['age']."</td>";
       echo"<td align='center'>".$row['city']."</td>";
       echo"<td align='center'>".$row['petname']."</td>";

       echo "<td>";
      echo "<a href='voteparty.php?updateid=$id'>";
       echo "<button  class='vote' align='center'>vote</button>";
      echo "</a>";

      echo "</td>"; 
      echo "</tr>"; 

   }    
}
}

?>
</body>
</html>
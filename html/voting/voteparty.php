<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-image:url('vote5.jpg');
            height:400px;
            width:400px;
            background-size:cover;
            background-repeat:no-repeat;
            margin-left:300px;
            margin-top:40px;
        }
        .select{
width:200px;
height:50px;
font-size:30px;
        }
        input{
            width:100px;
font-size:30px;

        }
        button{
        background-color:yellow;
        font-size:25px;
    }
        </style>
</head>
<body>
<?php
include "conn7.php";
$option="";
$sql1='SELECT * FROM candidate';
    $result1 = mysqli_query($conn7,$sql1);
    
    if(mysqli_num_rows($result1)>0){
        while($row=mysqli_fetch_assoc($result1)){
        $option .="<option>".$row['symbol']."</option>";
     
        }}
        ?>    
<div>
    <form action="" method="post">
    <select class="select" name="party" id="a" >
        
   <?php echo $option ?>
</select>
<button  id="vote">vote</button>
</form>
</div>

<?php
include "conn7.php";
$voteid=$_GET['voterid'];
if ($_SERVER ['REQUEST_METHOD']=="POST"){
    $party=$_POST['party'];
//   echo "$party";
  $sql="INSERT INTO votes(partyname,voterid) values('$party','$voteid')";
  $result=mysqli_query($conn7,$sql);

}

?>
</body>
</html>
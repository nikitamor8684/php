<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-image:url('vote2.jpg');
    }
    h1{
        color:red;
        margin-top:100px;
    }
    input{
        margin-left:550px;
        font-size:20px;
    }
    label{
        font-size:30px;
        color:red;
    }
    .box{
        margin-left:550px;
        margin-top:70px;
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
if($_SERVER['REQUEST_METHOD']=='POST'){
    $voteid=$_POST['voteid'];
    echo "$voteid";
 
    $sql = "SELECT * FROM voter where voterid='$voteid'";
    $result = mysqli_query($conn7,$sql);
   if($result){
    // if(mysqli_num_rows($result)>0){
        header('location:voteparty.php?voterid='.$voteid);
            }
            else{
            $sql1 = "SELECT * FROM votes where voterid='$voteid'";
            $result1= mysqli_query($conn7,$sql1);
            if($result1){
                echo "you have already voted";
            }
        }
            // else{
            //     echo "you are not eligible for voting";
            // }
 
}

    ?>
    <form action="" method="post">
    <h1 align="center">Enter your voter id</h1><br>
    <input type="text" id="id" name="voteid"><br>
    <input type="radio" id="radio">
    <label for="radio">Forgot voter id</label>
    <div class="box">
 
            <button>Submit</button>"
     
        <button onclick='func()' id="reset">reset</button>

</div>
</form>
<script>
function func(){
    document.getElementById('id').value="";
}
    </script>
<?php
   
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <style>
#msg{
    display:inline-block;
    width:700px;
    height:40px;
}
#send{
    background-color:blue;
    color:white;
    font-size:20px;
}
        </style>
</head>
<body>
<?php
include "conn.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
$msg=$_POST['msg'];
$sql="INSERT INTO secondchat(chat) values('$msg')";
$query=mysqli_query($conn,$sql);
}
?>
    <form action="" method="post">
    <?php
    
    $sql = "SELECT * FROM secondchat";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<p>you:".$row['chat']."</p>";
        $id=$row['user2id']; 
        $chat=$row['chat']; 

        // echo "$id";
        }
        // session_start();
        // $_SESSION['ab']="$id";
    }
    ?>
    

    <p id="delid"></p>
    <input type="text" name="msg" id="msg">

    <button  id='send'  value='$id' onclick='data("<?php $chat ?>")'>Send</button>;
    
    </form>
    <script>
    function data(a){
          
          console.log(a);
     
    //  if(a!="") {
    //           $.ajax({
    //               type: "POST",
    //               url: "second.php",
    //               data: {chat:a},
    //            dataType:"html",
    //               success: function (data) {
    // console.log("chat sent");
              
    // $("#delid").html("data");
    //               }
    //           });
    //       }
    //       else{
    //           alert("there is some error");
    //       }


  }
  </script>
</body>
</html>


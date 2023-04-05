<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include "conn.php";

if(isset($_POST['chat'])){
    $chat= $_POST['chat'];
    echo "$chat";
// if(ISSET($_SESSION['ab'])){
// session_start();
// $id=$_SESSION['ab'];
// $sql="SELECT chat FROM secondchat where id=$id";
// $query=mysqli_query($conn,$sql);
// if(mysqli_num_rows($query)>0){
// $msg=$_row['chat'];
// $result="INSERT INTO firstchat(chat) values('$chat')";
// $sql1=mysqli_query($conn,$result);
// if($sql1){
//     echo "data entered";
// }
// else{
//     echo "error";
// }

}
else{
    echo "there is some error";
}


// }
    ?>
</body>
</html>
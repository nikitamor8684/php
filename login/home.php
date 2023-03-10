<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="adminname">
    <input type="text" name="adminpassword">
    <input type="text" name="adminid">
    <input type="submit" value="login">
    </form>
<?php
include "conn3.php";
$adminname=$adminpass="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $adminname = $_POST['adminname'];
    $adminpass = $_POST['adminpassword'];
    $adminid=$_POST['adminid'];
    // echo "$adminname";
    // $sql = "SELECT * FROM lgn";
    // $result = mysqli_query($conn3,$sql);

// if(mysqli_num_rows($result)>0){
    //     while($row=mysqli_fetch_assoc($result)){
//   $row['name'];
//   $row['password'];
//     }

//     // foreach($row){
    //         if(($row['name']==$adminname)&&
    //         ($row['password']==$adminname)){
        //         header("location:session.php");   
        //     }
        //     else{
            //         echo "wrong information";
            //     }
            //     }

            $query="SELECT * FROM lgn where name='$adminname' AND password='$adminpass' AND id='$adminid'";
            $result= mysqli_query($conn3,$query);
            if(mysqli_num_rows($result)==1){
                session_start();
                $_SESSION['NM']='$adminname';
            header("location:welcome");
}
else {
    header('location:home');
}
}

// }

?>
   
</body>

</html>
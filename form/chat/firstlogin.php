<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
h1{
    color:blue;
}
#name{
    display:inline-block;
    font-size:20px;
    height:40px;
    width:700px;
    border-style:solid;
    border-radius:10px;
    border-color:blue;
    border-width:2px;
}
#pass{
    display:inline-block;
    font-size:20px;
    height:40px;
    width:700px; 
    border-style:solid;
    border-radius:10px;
    border-color:blue;
    border-width:2px;
}
label{
    display:inline-block;
    font-size:40px;
}
#lgn{
    background-color:blue;
    color:white;
    padding:5px;
    font-size:20px;
    border-style:solid;
    border-radius:10px;
    border-color:blue;
    border-width:2px;
}
    </style>
</head>
<body>
    <?php
    include "conn.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $query="SELECT * FROM first where  name='$name' AND password='$pass'";
    $result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    header('location:first.php');
}
else{
    echo "enter correct information";
}
}
    ?>
    <form action="" method="post">
        <h1>Log in</h1>
        <label for="name">enter username</label>
<input type="text" id="name" name="name"><br><br>
<label for="password">enter password</label>
<input type="text" id="pass" name="password"><br><br>
<button id="lgn">login</button>
    </form>
</body>
</html>
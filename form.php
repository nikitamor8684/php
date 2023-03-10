<!-- 
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

$name=$id=$namerror=$iderror=$passerror="";
if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['id']==""){
        $iderror ="<b style='color:red'>id is required</b>";
    }
    else{
        $id=$_POST['id'];
        echo "$id";
        // echo $_POST['id']."<br>";
    }
    echo "<br>";
}

    if ($_POST['name']==""){
        $namerror = "<b style='color:red'>name is required</b>";
    }
    else{
        $name=$_POST['name'];
        // echo $_POST['name']."<br>";  
        echo "$name";
    }

    if($_POST['password']==""){
        $passerror ="<b style='color:red'>age is required</b>";
    }
    else{
        echo $_POST['password']."<br>";
    }
    

?>

    <form action="" method="post">
    <label for="id">enter your id</label>
<input type="text" name="id" id="">
<b name="iderror"><?php echo $iderror ?></b>
<br>
        <label for="name">enter your name</label>
<input type="text" name="name" id="">
<b name="namerror"><?php echo $namerror ?></b>
<br>
<!-- <label for="age">enter your age</label>
<input type="text" name="age" id="">
<b name="ageerror"></b>
<br> -->

<!-- <br>
<input type="submit" value="save">
</form> -->

</body>
</html> -->
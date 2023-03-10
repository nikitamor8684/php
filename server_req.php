


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
    <input type="text" name="name" id="">
    <input type="text" name="age" id="">
    <input type="submit" value="show">
</form>

<?php

$name = $age="";

if($_SERVER['REQUEST_METHOD']=="POST"){

    echo $_POST['name']."<br>";
    echo $_POST['age']."<br>";

}


?>
</body>
</html>


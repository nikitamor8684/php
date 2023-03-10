<?php
$servername="localhost";
$username="root";
$password="";
$dbname="status";
$conn5=mysqli_connect($servername,$username,$password,$dbname);

?>

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
$sql1="SELECT * FROM nikita";
$result=mysqli_query($conn5,$sql1);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
 echo $row['naam'];
 if($row['status']=='active'){
    $st='deactive';
 }
 else{
    $st='active';
 }
 echo "<a href=update.php?id=".$row['id']."&sts=".$row['status'].">".$st."</a><br>";
    }
}
    ?>
</body>
</html>
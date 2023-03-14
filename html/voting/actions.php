<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-image:url('vote7.jpg');
            /* background-repeat:no-repeat; */
            margin-left:400px;
            width:400px;
            /* background-size:cover; */
        }
        a{
            display:inline-block;
            color:black; text-decoration:none;
            font-size:20px;
        }
        button{
            width:400px;
            height:50px;
            background-color:green;
           
        }
        input{
            width:80px;
            height:50px;
            background-color:red;  
            font-size:20px;
        }
        </style>
</head>
<body>
    <div>
        <h1>WELCOME</h1>
    <button><a href="resetvote.php">Reset voting</a></button><br><br>
    <button><a href="displaycandidate.php">Add/Update candidates</a></button><br><br>
    <button><a href="displayvoter.php">Add/Update a voter</a></button><br><br>
    <button><a href="result.php">Check results</a></button><br><br>
    <button><a href="adminlogin.php">Back</a></button><br><br>

 
</div>
</body>
</html>
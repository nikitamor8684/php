<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            background-image:url('vote10.jpg');
            background-repeat:no-repeat;
            margin-left:500px;
            margin-top:100px;
            height:400px;
            width:500px;
            background-size:cover;
        }
        label{
            font-size:25px;
            margin-left:40px;
        }
        input{
            display:inline-block;
            width:150px;
            height:30px;
margin-top:8px;
        }
        button{
            width:80px;
            background-color:green;
            width:90px;
        }
        a{
            display:inline-block;
            text-decoration:none;
            color:white;
            font-size:20px;
        }
        </style>
</head>
<body>
    <div class="box">
        <!-- <form action="" method="post"> -->
<label for="symbol">Symbol</label>
<input type="text" name="symbol">
<input type="submit" value="Go"><br><br>
<label for="sex">Sex</label>
<input type="text" name="sex"><br><br>
<label for="age">Age</label>
<input type="text" name="age"><br><br>
<label for="city">City</label>
<input type="text" name="city"><br><br>
<button><a href="#">Update</a></button>
<button><a href="#">Delete</a></button>
<button><a href="#">Back</a></button>

        <!-- </form> -->
</div>

</body>
</html>
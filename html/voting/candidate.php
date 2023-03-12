<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-image:url('vote9.jpg');
            background-repeat:no-repeat;
            margin-left:400px;
            margin-top:100px;
            /* background-size:cover; */
        }
        label{
            font-size:20px;
            color:red;
            font-family:arial;
            font-weight:bold;
        }
        input{
            height:20px;
            width:200px;
            margin-left:10px;
            margin-top:15px;
        }
        a{
            display:inline-block;
            font-family:arial;
            font-weight:bold;
            text-decoration:none;
            color:white;
            font-size:20px;
        }
        button{
            background-color:green;
            width:100px;
        }
        </style>
</head>
<body>
    <div>
    <!-- <form action="" method="post"> -->
<label for="symbol">Party symbol</label>
<input type="text" name="symbol"><br><br>
<label for="name">Name</label>
<input type="text" name="name"><br><br>
<label for="sex">Sex</label>
<input type="text" name="sex"><br><br>
<label for="age">Age</label>
<input type="text" name="Age"><br><br>
<label for="city">City</label>
<input type="text" name="City"><br><br>
<button><a href="#">Submit</a></button>
<button><a href="#">Back</a></button>
<button><a href="#">Home</a></button>

    <!-- </form> -->
</div>
</body>
</html>
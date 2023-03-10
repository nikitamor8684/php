

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Rating</title>
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color:darkblue;
        }

        .container {
            height: 200px;
            width: 300px;
            background-color:dodgerblue;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            flex-direction: column;
            border-radius: 10px;
            padding-bottom: 25px;
            position: relative;
        }

      

        label {
            font-size: 40px;
      
            cursor: pointer;
            
        }


        .check {
            display: none;
        }


        textarea {
            background-color: blue;
            resize: none;
            outline: none;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 5px;
            overflow: hidden;
            width: 250px;
            height: 50px;
            margin-bottom: 5px;
        }

        textarea::placeholder {
            color: white;
        }

        input[type="submit"] {
            width: 250px;
            height: 30px;
            border-radius: 5px;
            outline: none;
            border: none;
            background-color:red;
            cursor: pointer;
            font-weight: bold;
            color: white;
        }
    </style>

</head>

<body>
    <div class="container">

        <div>
            <label for="a1" class="star">&#9733</label>
            <label for="a2" class="star">&#9733</label>
            <label for="a3" class="star">&#9733</label>
            <label for="a4" class="star">&#9733</label>
            <label for="a5" class="star">&#9733</label>
        </div>
        <form action="" method="post">

            <input type="checkbox" name="rating[]" class="check" id="a1" value="1">
            <input type="checkbox" name="rating[]" class="check" id="a2"  value="1">
            <input type="checkbox" name="rating[]" class="check" id="a3"  value="1">
            <input type="checkbox" name="rating[]" class="check" id="a4"  value="1">
            <input type="checkbox" name="rating[]" class="check" id="a5"  value="1">
            <br>

            <textarea name="experience" placeholder="Describe your experience.."></textarea>
            <br>
            <input type="submit" value="POST">

        </form>

    </div>

    <script>
        var star = document.querySelectorAll(".star");
        var ele = document.querySelectorAll(".check");

        for (var i = 0; i <star.length; i++) {
            ele[i].checked = true;
            star[i].style.color = "yellow";
        }

        Array.from(ele).forEach((e, index) => {

            e.addEventListener("click", () => {
                for (var j = 0; j < ele.length; j++) {
                    ele[j].checked = false;
                    star[j].style.color = "white";

                }

                for (var i = 0; i <= index; i++) {
                    ele[i].checked = true;
                    star[i].style.color = "yellow";
                }

         
            })
        })
    </script>
    <?php
include "conn5.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['experience'];
echo "$name";
// $rat='rating[]';
$rating=count($_POST['rating']);
// foreach($rating as $v) {
//     echo "$v";  
// }
// $v1=count($v);
echo "$rating";
$sql="INSERT INTO rating(name,rating) values('$name','$rating')";
$result=mysqli_query($conn5,$sql);

}
    ?>
</body>

</html>
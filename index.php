

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ab{
            color:red;
        }
        .abc{
            background-color:red;
        }
    </style>
</head>
<body>
<?php

$nm = "Nikita";
$name="world";
$x=85.7;
$cars=array("volvo","bmw","toyota");


echo "<h1 class='ab'>hello $nm</h1>";
print "<h1 class='abc'> hello $name </h1>";


var_dump($nm);
print "<br>";
var_dump($x);
var_dump($cars);
echo"<br>";

class car{
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color=$color;
        $this->model=$model;
    }
    public function message(){
        return "my car is a " .$this->color. " " .$this->model."!";
    }
}
$mycar=new car("black","volvo");
echo $mycar -> message();
echo"<br>";
$mycar=new car("white","bmw");
echo $mycar -> message();

echo"<br>";
echo(pi());
echo"<br>";
echo(min(2,5,7,-5));
echo"<br>";
echo(max(6,8,9));
echo"<br>";
echo(abs(-6.3));
echo"<br>";
echo(sqrt(81));
echo"<br>";
echo(round(0.45));
echo"<br>";
echo(round(0.70));
echo"<br>";
echo(rand(0,100));
echo "<br>";
echo "<br>";

$numbers=array(4,6,2,44,13);
rsort($numbers);
echo count($numbers);
echo "<br>";
echo $numbers[0];
echo "<br>";
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++){
    echo $numbers[$x];
    echo "<br>";
}

echo "<br>";
$age=array("peter"=>"35","john"=>"78","joe"=>"95");
// echo $age['peter'];
foreach($age as $x=> $x_value){
    echo "$x_value";
    echo "<br>";
}
echo "<br>";

$cars=array(
    array("volvo",22,18),
    array("bmw",45,24),
    array("toyato",54,12),
    array("saab",98,67),
);
$carslength=count($cars);
// echo $cars[0][0]. " " .$cars[0][1]. " " .$cars[0][2];
// echo "<br>";
// echo $cars[1][0]. " " .$cars[1][1]. " " .$cars[1][2];

for($row=0;$row<4;$row++){
    echo "<ul>";
    for($col=0;$col<3;$col++){
        echo "<li>".$cars[$row][$col]. "</li>";
    }
    echo "</ul>";
}

$student=array(
    array("name","class","roll no."),
    array("nikita","BSC",4),
    array("nancy","bsc",7)
);
echo "<table border='1' cellspacing='0'>";
for($row=0;$row<3;$row++){
    echo "<tr>";
    for($col=0;$col<3;$col++){
        echo "<td>" .$student[$row][$col]. "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
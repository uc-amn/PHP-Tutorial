<?php
//Data types and typecasting
declare(strict_types=1);

$age = 20; //int
$name = 'Aman Kumar'; //Name
$exact_age = 20.3; //float
$boolean_val = true; //bool
$fav_food = array('Paneer','Rice','Dosa','Pizza', 21); // Array
$fav_football_player = "Neymar"; //null

echo 'age : '.$age.'<br>';
echo 'name : '.$name.'<br>';
echo 'exact_age : '.$exact_age.'<br>';
echo 'boolean_val : '.$boolean_val.'<br>';
print_r($fav_food);
echo '<br>fav_football_player : '.$fav_football_player.'<br>';

echo "<br> Now prinitng the data types : <br>";

echo '<br>data type of age : ';
echo gettype($age);

echo '<br> Data type of exact age : <br>';
echo var_dump($exact_age);


//typecasting


function sum(float $x, float $y)
{
    return $x+$y;
}
echo '<br>';
//echo sum(5,'7'); //7 is a string here
echo $sum = sum(5.5,7); // inetger can be taken as float

echo '<br>'.var_dump($sum);

?>
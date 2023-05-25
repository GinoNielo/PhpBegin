<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
  
<?php
 $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein']; //deel 1

 echo $myArray [0];
 echo print_r($myArray);  
 echo "<br>";

$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein']; //deel 2

$myArray[] = 'scooter';
echo print_r($myArray);

//deel 3
// eerste array word er bar uitgeprint
//Tweede word er 4 uitgeprint
// derde word toyota
//4de elke auto?
// 5de word 5 geprint
// 6de word elke nummer geprint -1


//deel 4

$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

$gemiddelde = array_sum ($cijfersPHP) / 5;

echo(round($gemiddelde) . "<br>");
echo "gemiddelde is:" .$gemiddelde;


?>
</body>
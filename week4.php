<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week4</title>
</head>
<body>
<?php
for ($i = 0; $i <= 50; $i++) {
  echo $i . " ";

$Klasgenooten = array(
"Dylan",
"Jaden",
"Omesh",
"Gideon",
"Dejah",
"Lenny",
"Lucas",
"Zaka",
"Martino",
"Mustafa"
);
foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";
  }
}

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

for ($i = 0; $i < count($maanden); $i++) {
  echo 'Maand '.($i + 1).' is '.$maanden[$i].'.<br />';
}

?>  
</body>
</html>
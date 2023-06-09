<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week6</title>
</head>
<body>
<?php

$tijd = date("d-m-Y");

if ($tijd < '12:00') {
    echo "Goedemorgen";
} elseif ($tijd >= '12:00' && $tijd < '18:00') {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

?>
</body>
</html>
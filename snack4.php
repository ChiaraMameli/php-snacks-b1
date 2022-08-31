<?php
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/

$numbers = [];

while(count($numbers) < 15){
    $number = rand(1, 100); 
    
    if(in_array($number, $numbers)){
        $number;   
    }
    $numbers[] = $number;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <ol>
        <?php for($i = 0; $i < count($numbers); $i++) :?>
            <li><?=$numbers[$i]?></li>
        <?php endfor; ?>
    </ol>
</body>
</html>
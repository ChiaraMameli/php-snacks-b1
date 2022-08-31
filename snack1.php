<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$april_eleventh = [
    [
        ['home_team' => 'Mavericks', 'score' => '130'],
        ['visitors' => 'Spurs', 'score' => '120']
    ],
    [
        ['home_team' => 'Trail Blazers', 'score' => '80'],
        ['visitors' => 'Jazz', 'score' => '111']
    ],
    [
        ['home_team' => 'Sungs', 'score' => '109'],
        ['visitors' => 'Kings', 'score' => '116']
    ],
    [
        ['home_team' => 'Clippers', 'score' => '138'],
        ['visitors' => 'Thunder', 'score' => '88']
    ],
    [
        ['home_team' => 'Nuggets', 'score' => '141'],
        ['visitors' => 'Lakers', 'score' => '146']
    ],
    [
        ['home_team' => 'Pelicans', 'score' => '107'],
        ['visitors' => 'Warriors', 'score' => '128']
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<style>
        li{
            list-style-type: none;
            padding: 1rem;
            font-size: 2rem;
        }

        h2{
            font-size: 2.5rem;
            text-align: center;
        }
</style>

<body>
    <h2>NBA Games - April 11 2022</h2>
    <ul>
        <?php for($i = 0; $i < count($april_eleventh); $i++) : ?>
            <li><?= "{$april_eleventh[$i][0]['home_team']} - {$april_eleventh[$i][1]['visitors']} | {$april_eleventh[$i][0]['score']}-{$april_eleventh[$i][1]['score']}"?> </li>
        <?php endfor; ?>
    </ul>
    
</body>
</html>
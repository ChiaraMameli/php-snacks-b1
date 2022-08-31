<?php

/* 
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/

$posts_by_date = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$dates = array_keys($posts_by_date);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<style>
    * {
        text-align: center;
    }

    h3 {
        margin-top: 2rem;
    }

    .card {
        border: 1px solid #FFF;
        border-radius: 2rem;

        margin: 20px auto;
        padding: 2rem;

        width: 30vw;

        background-color: #D4EEF6;
        box-shadow: 0px 5px 5px #BCBCBC;
    }
</style>
<body>

    <?php for($i = 0; $i < count($dates); $i++) : 
        $date = $dates[$i];
        $posts = $posts_by_date[$date];
    ?>
    <h3><?=$date?></h3>
            <?php for($j = 0; $j < count($posts); $j++) :?>
                <div class="card">
                    <h4><?=$posts[$j]['title']?></h4>
                    <span><?=$posts[$j]['text']?></span>
                    <p><?=$posts[$j]['author']?></p>
                </div>
            <?php endfor; ?>

    <?php endfor; ?>

</body>
</html>
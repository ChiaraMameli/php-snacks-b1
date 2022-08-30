<?php
$folds = ['snack1.php', 'snack2.php', 'snack3.php'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Snacks</h1>
    <ul>
        <?php for($i = 0; $i < count($folds); $i++) : ?>
            <li><a href="<?= $folds[$i]?>"><?= $folds[$i]?></a></li>
        <?php endfor; ?>
    </ul>
</body>
</html>
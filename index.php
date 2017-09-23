<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mystyle.css">

    <title>Document</title>
</head>
<body>


<?php

/**
 * create a random permutation from [ 1, 2, ..., n ];
 * for example randomPermutation(3) might return [ 2, 1, 3 ]
 * @param int $length of random array
 * @return array
 */
function randomPermutation($length = 10) {
    $unused = [];
    $values = [];

    for ($i = 1; $i <= $length; $i++) {
        $unused[] = $i;
    }

    for ($i = 0; $i < $length; $i++) {
        $rand_i = random_int(0, $length - $i - 1);
        $j = 0;
        foreach ($unused as $key => $value) {
            if ($rand_i === $j) {
                $values[] = $value;
                unset($unused[$key]);
                break;
            }
            $j++;
        }
    }

    return $values;
}

?>

<div class="grid">
    <?php
    $squares = 20;
    $pairs = array_merge(randomPermutation($squares / 2),
        randomPermutation($squares / 2));

    ?>
    <?php foreach ($pairs as $i): ?>
        <div class="card_container">
            <div class="card notfound" value="<?= $i ?>">
                <div class="face front">
                    <img class="mysvg" src="img/pink.svg">
                </div>
                <div class="face back ">
                    <p><?= $i ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<script src="js/jquery-3.2.1.js"></script>
<script src="js/my.js"></script>
</body>
</html>
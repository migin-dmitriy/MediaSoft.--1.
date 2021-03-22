<?php
    $name = "Мигин Дмитрий";
    $a = array (
        'Я,'=> 1,
        'Мигин'=> 2,
        'Дмитрий'=> 3,
        'Игоревич,'=> 4,
        'прохожу'=> 5,
        'практику'=> 6,
        'в'=> 7,
        'MediaSoft!'=> 8,
        'Красный.'=> 9,
        'Гриб:)'=> 10
    );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="text">
        <p><?=$name?></p>
    </div>

    <?php foreach ( $a as $b => $v) { ?>
        <div><?php echo "[$b] =>$v.\n"; ?></div>
    <?php }?>

</body>
</html>



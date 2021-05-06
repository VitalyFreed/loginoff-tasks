<?php

$cookie_key = 'show_count';

if (isset($_COOKIE['show_count'])) {
    $current = ++$_COOKIE['show_count'];
    setcookie($cookie_key, $current);
} else {
    setcookie($cookie_key, 0);
}

$show_count = $_COOKIE['show_count'];

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
<img src="image.php" alt="Собака">
<p>Файл был показан <?=$show_count?> раз</p>
</body>
</html>
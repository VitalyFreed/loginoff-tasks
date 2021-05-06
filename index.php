<?php

$first_number = $_POST['first'];
$second_number = $_POST['second'];
$operation = $_POST['operations'];

$result = null;

if (is_numeric($first_number) && is_numeric($second_number)) {
    switch ($operation) {
        case '+':
            $result = $first_number + $second_number;
            break;
        case '-':
            $result = $first_number - $second_number;
            break;
        case '*':
            $result = $first_number * $second_number;
            break;
        case '/':
            if ($second_number == 0) {
                $result = 'На ноль делить нельзя';
            } else {
                $result = number_format($first_number / $second_number, 2);
            }
            break;
    }
} else {
    $result = 'Введите число';
}

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
<form name="calculator" method="post" action="/">
    <label for="first">
        Введите первое число: <input type="text" name="first" id="first" value="<?=empty($first_number) ? 0 : $first_number?>" maxlength="10">
    </label>
    <label for="second">
        Введите второе число: <input type="text" name="second" id="second" value="<?=empty($second_number) ? 0 : $second_number?>" maxlength="10">
    </label>
    <br><br>
    <span>Выберите операцию:</span>
    <select name="operations" id="calc">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <br><br>
    <input type="submit" value="Посчитать">
    <?php if ($result) { ?><p>Результат: <?= $result ?></p><?php } ?>
</form>
</body>
</html>
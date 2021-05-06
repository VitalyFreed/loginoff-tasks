<?php

$first_number = floatval($_POST['first']);
$second_number = floatval($_POST['second']);
$operation = $_POST['operations'];

$result = null;

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
        $result = $first_number / $second_number;
        break;
}

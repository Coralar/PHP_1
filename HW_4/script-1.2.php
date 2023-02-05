<?php
//Не работает, почему?
$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$result = array_map(function (int $number) {
    $res = $number % 2;
    if ($res) {
        return "Нечетное";
    } else {
        return "Четное";
    }
}, $numbers);
print_r($result);

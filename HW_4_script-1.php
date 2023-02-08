<?php
//Из прошлого ДЗ, в тот раз забыл скинуть. Не работает, возвращает пустой массив, почему?
$arrayNumbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$evenOrOdd = function ($array) {
    $result = [];
    foreach ($array as $number) {
        $module = $number % 2;
        if ($module = 0) {
            $result[] = "Четное";
        } elseif ($module != 0) {
            $result[] = "Нечетное";
        }
    }
    return $result;
};
print_r($evenOrOdd($arrayNumbers));
<?php
$arrayNumbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$aggregationData = function (array $numbers): array {
    return [
        'min' => min($numbers),
        'max' => max($numbers),
        'avg' => array_sum($numbers) / count($numbers)
    ];
};
print_r($aggregationData ($arrayNumbers));
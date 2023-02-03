<?php
$firstArray = [29, 14, 3, 45, 74, 93, 4, 9, 85, 51];
$secondArray = [7, 12, 53, 23, 5, 24, 25, 4, 53, 8];
$resultArray = [];
foreach ($firstArray as $index => $number) {
    $resultArray[] = $number * $secondArray[$index] . PHP_EOL;
}
print_r($resultArray);
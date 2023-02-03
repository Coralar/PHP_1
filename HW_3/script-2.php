<?php
$epithets = ["бесконечного", "вечного", "космического", "безграничного", "умопомрачительного"];
$wishes = ["здоровья", "счастья", "воображения", "достатка", "благополучия"];
$name = readline("Как зовут именинника?" . PHP_EOL);
$fullWish = [];
for ($i = 0; $i < 3; $i++) {
    $epithet = $epithets[array_rand($epithets)];
    $wish = $wishes[array_rand($wishes)];
    if (!in_array(($epithet . " " . $wish), $fullWish)) {
        $fullWish[] = $epithet . " " . $wish;
    } else {
        $i--;
    }
};
$stringWish = implode(', ', $fullWish);
$greeting = "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю $stringWish.";
echo $greeting;
//Исключить повторение пар эпитет-пожелание у меня получилось, но как совсем исплючить потовторение эпитетов и пожеланий
//я не придумал.
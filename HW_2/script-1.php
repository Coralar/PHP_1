<?php
while (true) {
    $answer = readline("В каком году произошло крещение Руси?\n
Вариант 1: 810\n
Вариант 2: 990\n
Вариант 3: 740\n
Вариант 4: 988\n");
    if ($answer == 810 || $answer == 990 || $answer == 740) {
        echo "Неверный ответ\n";
        break;
    } elseif ($answer == 988) {
        echo "Верный ответ\n";
        break;
    }
}
<?php
$quantityTasks = (int)readline("Какое колличество задач запланировано на день?\n");
$sumTask = null;
$sumTime = 0;
for ($i = 0; $quantityTasks > $i; $i++) {
    $task = readline("Какая задача стоит перед вами сегодня?\n");
    $sumTask = $sumTask . $task . "\n";
    $time = (int)readline("Сколько времени займет эта задача?\n");
    $sumTime = $sumTime + $time;;
};
echo "Сегодня у вас запланировано $quantityTasks приоритетных задачи на день:\n
$sumTask\n
Это займет $sumTime часов\n";


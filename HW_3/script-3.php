<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Архаткина Владислава' => 2,
        'Мещерякова Мария' => 4,
        'Саврасова Фаина' => 4,
        'Хромченко Зинаида' => 5,
        'Протасова Майя' => 4,
        'Протасова Майя' => 2
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Смирнова Христина' => 3,
        'Белорусов Ефрем' => 5,
        'Ягода Назар' => 2,
        'Ярилова Розалия' => 5,
        'Нырко Платон' => 2,
        'Калинин Агап' => 5,
    ]
];

$expulsion = [];
$maxAverageGrade = 0;
$averageGrade = 0;
$bestGroup = " ";


foreach ($students as $groupName => $group) {
    $sumGrades = 0;
    foreach ($group as $studentName => $studentGrade) {
        $sumGrades += $studentGrade;
        if ($studentGrade < 3) {
            $expulsion[$groupName][] = $studentName;
        }
    }
    $averageGrade = $sumGrades / count($group);
    print ("$groupName: " . round($averageGrade, 2) . PHP_EOL);
    if ($averageGrade > $maxAverageGrade) {
        $maxAverageGrade = round($averageGrade, 2);
        $bestGroup = $groupName;
    }

}
print("Лучшая группа по успеваемости: $bestGroup - $maxAverageGrade" . PHP_EOL);
print("Студенты для отчисления:" . PHP_EOL);
print_r($expulsion);

<?php
//Я не понял как это работает, что за функция search? В документации есть только array_search
$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];
$text = (string)readline("Введите запрос:");
function search(string $searchThing, array $searchArray): bool
{
    foreach ($searchArray as $value) {
        if (is_array($value)) {
            if (search($searchThing, $value)) {
                return true;
            }
        } else {
            if ($searchThing == $value) {
                return true;
            }
        }

    }
    return false;
}

echo search($text, $box) ? "true" : "false";
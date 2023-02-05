<?php
$name = 'Иван';
function readNumber(string $message, Closure $onError): int
{
    while (true) {
        $line = readline($message);
        $number = (int)$line;
        if ($number) {
            break; // Если пришло число, выходим из цикла
        }

        $onError($line); // Передаем аргумент
    }

    return $number;
}

$number = readNumber('Введите число', function ($input) use ($name) {
    echo "$name, введите число\n";
});
print $number;
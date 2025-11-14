<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

function start(): void
{
    $description = 'What is the result of the expression?';

    $data = [];
    $operations = ['+', '-', '*'];

    $roundsAmount = 3;

    for ($rounds = 0; $rounds < $roundsAmount; $rounds++) {
        $number1 = rand(1, 15);
        $number2 = rand(1, 15);
        $operator = $operations[array_rand($operations)];

        $answer = match ($operator) {
            '+' => $number1 + $number2,
            '-' => $number1 - $number2,
            '*' => $number1 * $number2
        };

        $question = "{$number1} {$operator} {$number2}";

        $data[$question] = (string) $answer;
    }

    runGame($description, $data);
}

<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

function start(): void
{
    $description = 'Find the greatest common divisor of given numbers.';
    $data = [];
    $roundsAmount = 3;

    for ($rounds = 0; $rounds < $roundsAmount; $rounds++) {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $answer = getGcd($number1, $number2);

        $question = "{$number1} {$number2}";

        $data[$question] = (string) $answer;
    }

    runGame($description, $data);
}

function getGcd(int $a, int $b): int
{
    $a = abs($a);
    $b = abs($b);
    while ($b != 0) {
        list($a, $b) = array($b, $a % $b);
    }
    return $a;
}

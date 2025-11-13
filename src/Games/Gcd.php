<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\exec;

function start()
{
    $description = 'Find the greatest common divisor of given numbers.';
    $data = [];

    for ($rounds = 0; $rounds < 3; $rounds++) {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $answer = gcd($number1, $number2);

        $question = "{$number1} {$number2}";

        $data[$question] = (string) $answer;
    }

    exec($description, $data);
}

function gcd($a, $b)
{
    $a = abs($a);
    $b = abs($b);
    while ($b != 0) {
        list($a, $b) = array($b, $a % $b);
    }
    return $a;
}

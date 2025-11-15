<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

function start(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];

    $roundsAmount = 3;

    for ($rounds = 0; $rounds < $roundsAmount; $rounds++) {
        $question = rand(1, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        $data[$question] = $answer;
    }

    runGame($description, $data);
}

function isPrime(int $n): bool
{
    $result = true;

    if ($n < 2) {
        $result = false;
    } elseif ($n === 2) {
        $result = true;
    } elseif ($n % 2 === 0) {
        $result = false;
    } else {
        for ($i = 3; $i * $i <= $n; $i += 2) {
            if ($n % $i === 0) {
                $result = false;
                break;
            }
        }
    }

    return $result;
}

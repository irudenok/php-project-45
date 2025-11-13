<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\exec;

function start()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];

    for ($rounds = 0; $rounds < 3; $rounds++) {
        $question = rand(1, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        $data[$question] = $answer;
    }

    exec($description, $data);
}

function isPrime($n)
{
    if ($n < 2) return false;
    if ($n == 2) return true;
    if ($n % 2 == 0) return false;
    
    for ($i = 3; $i * $i <= $n; $i += 2) {
        if ($n % $i == 0) return false;
    }
    
    return true;
}

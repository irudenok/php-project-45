<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame(string $description, array $data): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($description);

    foreach ($data as $question => $answer) {
        line("Question: {$question}");
        $userAnswer = prompt('Your answer ');

        if ($userAnswer !== $answer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line('Correct!');
    }

    line("Congratulations, {$name}!");
}

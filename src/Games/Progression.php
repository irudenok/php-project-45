<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

function start(): void
{
    $description = 'What number is missing in the progression?';
    $data = [];
    $progressionLen = 10;
    $minValue = 1;
    $maxValue = 10;
    $roundsAmount = 3;

    for ($rounds = 0; $rounds < $roundsAmount; $rounds++) {
        $start = rand($minValue, $maxValue);
        $step = rand(1, 10);

        $progression = array_map(
            fn($i) => $start + $step * $i,
            range(0, $progressionLen - 1)
        );

        $hiddenIdx = array_rand($progression);
        $answer = $progression[$hiddenIdx];
        $progression[$hiddenIdx] = '..';

        $data[implode(' ', $progression)] = (string) $answer;
    }

    runGame($description, $data);
}

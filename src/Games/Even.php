<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

function start(): void
{
	$description = 'Answer "yes" if the number is even, otherwise answer "no".';

	$data = [];
	$roundsAmount = 3;

	for ($rounds = 0; $rounds < $roundsAmount; $rounds++) {
	    $question = rand(1, 100);
	    $answer = isEven($question) ? 'yes' : 'no';
	    $data[$question] = $answer;
	}

	runGame($description, $data);
}

function isEven(int $question): bool
{
    return $question % 2 === 0;
}
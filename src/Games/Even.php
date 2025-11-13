<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\exec;

function start()
{
	$description = 'Answer "yes" if the number is even, otherwise answer "no".';

	$data = [];

	for ($rounds = 0; $rounds < 3; $rounds++) {
	    $question = rand(1, 100);
	    $answer = isEven($question) ? 'yes' : 'no';
	    $data[$question] = $answer;
	}

	exec($description, $data);
}

function isEven($question)
{
    return $question % 2 === 0;
}
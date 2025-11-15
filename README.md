### Hexlet tests and linter status:
[![Actions Status](https://github.com/irudenok/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/irudenok/php-project-45/actions)

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=irudenok_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=irudenok_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=irudenok_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=irudenok_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=irudenok_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=irudenok_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=irudenok_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=irudenok_php-project-45)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=irudenok_php-project-45&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=irudenok_php-project-45)


## Prerequisites

* Linux, Macos, WSL
* PHP >= 8.2
* Make
* Git

## Setup

```bash
git clone git@github.com:irudenok/php-project-45.git

make install
```

## Run games

```bash
make brain-even
make brain-calc
make brain-gcd
make brain-progression
make brain-prime
```

## Brain even: пользователю показывается случайное число. И ему нужно ответить yes, если число чётное, или no — если нечётное.
[![asciicast](https://asciinema.org/a/q3IJyZnXbiaICfW7ZljWkrc5r.svg)](https://asciinema.org/a/q3IJyZnXbiaICfW7ZljWkrc5r)

## Brain calc: пользователю показывается случайное математическое выражение, например 35 + 16, которое нужно вычислить и записать правильный ответ.
[![asciicast](https://asciinema.org/a/DpyvkKggG3VGbwbRassmxUKm4.svg)](https://asciinema.org/a/DpyvkKggG3VGbwbRassmxUKm4)

## Brain GCD: пользователю показывается два случайных числа, например, 25 50. Пользователь должен вычислить и ввести наибольший общий делитель этих чисел.
[![asciicast](https://asciinema.org/a/VFIwvsFcUHzeOn9A7rmFWuMND.svg)](https://asciinema.org/a/VFIwvsFcUHzeOn9A7rmFWuMND)

## Brain Progression: показываем игроку ряд чисел, образующий арифметическую прогрессию, заменив любое из чисел двумя точками. Игрок должен определить это число.
[![asciicast](https://asciinema.org/a/LKVjaw3tCMIKXSBN4ZysjMG57.svg)](https://asciinema.org/a/LKVjaw3tCMIKXSBN4ZysjMG57)

## Brain Prime: пользователю показывается случайное число. Пользователь должен ответить простое число или нет.
[![asciicast](https://asciinema.org/a/EBhRgOYfryB0e4KM4WYqMneRW.svg)](https://asciinema.org/a/EBhRgOYfryB0e4KM4WYqMneRW)
<?php

function square(int $value): int 
 {
    return $value * $value;
 }

 function selectForSquare(int $firstNumber, int $secondNumber): int
 {
    return square(max($firstNumber, $secondNumber));
 }

 function randSquare() : void
 {
    $firstNumber = rand(0, 100);
    $secondNumber = rand(0, 100);

    echo "Valeur 1 : $firstNumber\n";
    echo "Valeur 2 : $secondNumber\n";
    echo 'Le carré généré est  ' . selectForSquare($firstNumber, $secondNumber);
 }

 randSquare();
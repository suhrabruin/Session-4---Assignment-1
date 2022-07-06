<?php

function sum(int $num1, int $num2){
    return $num1 + $num2;
}

function subtract(int $num1, int $num2){
    return $num1 - $num2;
}

function multiply(int $num1, int $num2){
    return $num1 * $num2;
}

function divide(int $num1, int $num2){
    if($num2!=0)
    return $num1 / $num2;
    
    die("Divide by zero");
}
<?php
// Подючаем класс калькулятора
require 'Calculator/Calculator.php';

$a = 10;
$b = 2;

// Создаем класс калькулятора
$calculator = new Calculator();

// Сумма
echo $calculator->sum($a, $b);

// Разность
echo $calculator->sub($a, $b);

// Умножение
echo $calculator->mul($a, $b);

// Деление
echo $calculator->div($a, $b);
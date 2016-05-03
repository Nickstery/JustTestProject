<?php

class Calculator
{
    public function __construct()
    {

    }

    // Cумма
    public function sum($a, $b){
        return $a + $b;
    }

    // Деление
    public function div($a, $b){
        // На ноль делить не можем
        if($b == 0){
            return 'Could not divide by zero';
        }
        return $a / $b;
    }

    // Разность
    public function sub($a, $b){
        return $b - $a;
    }

    // Умножение
    public function mul($a, $b){
        return $a * $b;
    }
}
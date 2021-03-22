<?php

namespace kuliev;

use core\EquationInterface;

class QuadEquationSolver extends LinearEquationSolver implements EquationInterface
{
    // Function for finding discriminant
    protected function discriminant($a, $b, $c)
    {
        return (pow($b, 2) - 4 * $a * $c);
    }

    public function solve($a, $b, $c)
    {
        if ($a == 0 && $b == 0 && $c == 0) {
            throw new KulievException("Equation does not exist.\n\r");
        }

        if ($a == 0) {
            return $this->solveLinearEquation($b, $c);
        }

        $d = $this->discriminant($a, $b, $c);

        if ($d < 0) {
            throw new KulievException("Equation does not exist\n\r");
        }
        
        $equation = "x=".$a."x2+".$b."x+".$c;
        MyLog::log("Equation is ".$equation."\n\r");

        MyLog::log("It is a quad equation.\n\r");

        if ($d == 0) {
            return $this->x = [(-$b - sqrt($d) / (2 * $a))];
        }

        if ($d > 0) {
            return $this->x = [(-$b - sqrt($d)) / (2 * $a), (-$b + sqrt($d)) / (2 * $a)];
        }

        throw new KulievException("Equation does not exist\n\r");
    }
}
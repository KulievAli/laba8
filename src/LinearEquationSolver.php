<?php

namespace kuliev;

class LinearEquationSolver
{
    protected $x;

    public function solveLinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new KulievException('Equation does not exist.');
         }

        return $this->x = [($b * -1) / $a];
    }
}
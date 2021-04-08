<?php

namespace kuliev;


use core\EquationInterface;

class QuadEquationSolver extends LinearEquationSolver implements EquationInterface
{
    # Function for finding discriminant
    protected function discriminant($a, $b, $c)
    {
        return (pow($b, 2) - 4 * $a * $c);
    }

    public function solve(float $a, float $b, float $c): array
    {
        if ($a == 0) {
            return $this->solveLinearEquation($b, $c);
        }

        $d = $this->discriminant($a, $b, $c);

        if ($d == 0) {
            return $this->x = [(-$b - sqrt($d) / (2 * $a))];
        }

        if ($d > 0) {
            return $this->x = [(-$b - sqrt($d)) / (2 * $a), (-$b + sqrt($d)) / (2 * $a)];
        }

            throw new KulievExeption('The equation does not have solution');
        }
    }
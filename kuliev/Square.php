<?php

namespace kuliev;

include 'kuliev\Line.php';
include 'core\EquationInterface.php';

use core\EquationInterface;


class Square extends Line implements EquationInterface
{
    public function solve($a, $b, $c)
    {
        if ($a == 0) {
            return parent::line($b, $c);
        }
        $D = $this->searchD($a, $b, $c);
        if ($D > 0) {
            $X1 = ((-$b) + sqrt($D)) / (2 * $a);
            $X2 = ((-$b) - sqrt($D)) / (2 * $a);
            return array($X1, $X2);
        }
        if ($D == 0) {
            $X1 = -($b / (2 * $a));
            return array($X1);
        }
        return null;
    }

    protected function searchD($a, $b, $c)
    {
        $D = $b * $b - 4 * $a * $c;
        return $D;
    }
}
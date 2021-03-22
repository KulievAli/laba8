<?php

namespace core;

interface EquationInterface
{
    /**
     * @param float $Ea
     * @param float $b
     * @param float $c
     *
     * @return array
     */
    public function solve($a, $b, $c);
}

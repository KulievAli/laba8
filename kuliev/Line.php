<?php

namespace kuliev;

class Line
{
    protected $X1;

    public function line($a, $b)
    {
        if ($a == 0) {
            return null;
        }
        return $this->X1 = array(-($b / $a));

    }
}
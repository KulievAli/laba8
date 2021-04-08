<?php

use PHPUnit\Framework\TestCase;
use kuliev\LinearEquationSolver;
use kuliev\KulievException;

final class LinearEquationSolverTest extends TestCase {
    public function testSolveLinearEquation() {
        $solver = new LinearEquationSolver();

        // 4x+2=0
        $this->assertEquals(
            [-0.5],
            $solver->solveLinearEquation(4, 2)
        );

        // 2x+1=0
        $this->assertEquals(
            [-0.5],
            $solver->solveLinearEquation(2, 1)
        );

        // a == 0
        $this->expectException(KulievException::class);
        $solver->solveLinearEquation(0, 1);
    }
}
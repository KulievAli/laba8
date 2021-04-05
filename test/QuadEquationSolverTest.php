<?php

use PHPUnit\Framework\TestCase;
use kuliev\QuadEquationSolver;
use kuliev\KulievException;

final class QuadEquationSolverTest extends TestCase {
    public function testSolve() {
        $solver = new QuadEquationSolver();

        // 2x+1=0
        $this->assertEquals(
            [-0.5],
            $solver->solve(0, 2, 1)
        );
        
        // 4x2+2x+0=0
        $this->assertEquals(
            [-0.5, 0],
            $solver->solve(4, 2, 0)
        );

        // 2x2+4x+0=0
        $this->assertEquals(
            [-2, 0],
            $solver->solve(2, 4, 0)
        );
        
        // a == 0
        $this->expectException(KulievException::class);
        $solver->solve(0, 0, 0);
        
        // Дискриминант < 0
        $this->expectException(KulievException::class);
        $solver->solve(1, -2, 2);
    }
}
<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait TanTest
{

    public function testTan(): void
    {
        $this->assertEquals(
            0.5463024898437905,
            Math::tan(0.5)
        );
    }

}
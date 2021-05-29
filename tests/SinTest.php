<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait SinTest
{

    public function testSin(): void
    {
        $this->assertEquals(
            0.479425538604203,
            Math::sin(0.5)
        );
    }

}

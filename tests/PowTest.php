<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait PowTest
{

    public function testPow(): void
    {
        $this->assertEquals(
            256,
            Math::pow(2, 8)
        );
    }

}

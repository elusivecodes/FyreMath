<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait SqrtTest
{

    public function testSqrt(): void
    {
        $this->assertEquals(
            1.4142135623730951,
            Math::sqrt(2)
        );
    }

}

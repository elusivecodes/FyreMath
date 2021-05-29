<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait CosTest
{

    public function testCos(): void
    {
        $this->assertEquals(
            0.8775825618903728,
            Math::cos(0.5)
        );
    }

}

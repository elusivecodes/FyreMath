<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait CosTest
{

    public function testCos(): void
    {
        $this->assertSame(
            0.8775825618903728,
            Math::cos(0.5)
        );
    }

}

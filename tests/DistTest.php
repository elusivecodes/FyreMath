<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait DistTest
{

    public function testDist(): void
    {
        $this->assertSame(
            1.8027756377319946,
            Math::dist(0.5, 1.5, 2, 2.5)
        );
    }

}

<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait AsinTest
{

    public function testAsin(): void
    {
        $this->assertEquals(
            0.5235987755982989,
            Math::asin(0.5)
        );
    }

}

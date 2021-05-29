<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait AtanTest
{

    public function testAtan(): void
    {
        $this->assertEquals(
            0.4636476090008061,
            Math::atan(0.5)
        );
    }

}

<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait FloorTest
{

    public function testFloor(): void
    {
        $this->assertSame(
            2.0,
            Math::floor(2.75)
        );
    }

}

<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait FloorTest
{

    public function testFloor(): void
    {
        $this->assertEquals(
            2,
            Math::floor(2.75)
        );
    }

}

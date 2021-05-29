<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait DegreesToRadiansTest
{

    public function testDegreesToRadians(): void
    {
        $this->assertEquals(
            0.7853981633974483,
            Math::degreesToRadians(45)
        );
    }

}

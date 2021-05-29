<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait RadiansToDegreesTest
{

    public function testRadiansToDegrees(): void
    {
        $this->assertEquals(
            45,
            Math::radiansToDegrees(0.7853981633974483)
        );
    }

}

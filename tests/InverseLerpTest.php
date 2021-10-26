<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait InverseLerpTest
{

    public function testInverseLerp(): void
    {
        $this->assertEquals(
            .5,
            Math::inverseLerp(50, 100, 75)
        );
    }

}

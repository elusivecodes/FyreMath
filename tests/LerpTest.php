<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait LerpTest
{

    public function testLerp(): void
    {
        $this->assertSame(
            75.0,
            Math::lerp(50, 100, .5)
        );
    }

}

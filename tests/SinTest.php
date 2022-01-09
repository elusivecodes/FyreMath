<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait SinTest
{

    public function testSin(): void
    {
        $this->assertSame(
            0.479425538604203,
            Math::sin(0.5)
        );
    }

}

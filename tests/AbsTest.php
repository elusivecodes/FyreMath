<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait AbsTest
{

    public function testAbs(): void
    {
        $this->assertSame(
            1,
            Math::abs(1)
        );
    }

    public function testAbsNegative(): void
    {
        $this->assertSame(
            1,
            Math::abs(-1)
        );
    }

    public function testAbsFloat(): void
    {
        $this->assertSame(
            0.5,
            Math::abs(-0.5)
        );
    }

}

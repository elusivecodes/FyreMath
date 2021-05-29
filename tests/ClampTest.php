<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Math;

trait ClampTest
{

    public function testClamp(): void
    {
        $this->assertEquals(
            0.5,
            Math::clamp(0.5)
        );
    }

    public function testClampBelow(): void
    {
        $this->assertEquals(
            1,
            Math::clamp(0, 1, 2)
        );
    }

    public function testClampAbove(): void
    {
        $this->assertEquals(
            2,
            Math::clamp(3, 1, 2)
        );
    }

}

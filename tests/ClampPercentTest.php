<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait ClampPercentTest
{

    public function testClampPercent(): void
    {
        $this->assertEquals(
            50,
            Math::clampPercent(50)
        );
    }

    public function testClampPercentBelow(): void
    {
        $this->assertEquals(
            0,
            Math::clampPercent(-50)
        );
    }

    public function testClampPercentAbove(): void
    {
        $this->assertEquals(
            100,
            Math::clampPercent(150)
        );
    }

}

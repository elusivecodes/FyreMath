<?php
declare(strict_types=1);

namespace Tests;

use Fyre\Utility\Math;

trait ClampPercentTestTrait
{

    public function testClampPercent(): void
    {
        $this->assertSame(
            50.0,
            Math::clampPercent(50)
        );
    }

    public function testClampPercentBelow(): void
    {
        $this->assertSame(
            .0,
            Math::clampPercent(-50)
        );
    }

    public function testClampPercentAbove(): void
    {
        $this->assertSame(
            100.0,
            Math::clampPercent(150)
        );
    }

}

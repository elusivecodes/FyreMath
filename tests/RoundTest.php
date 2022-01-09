<?php
declare(strict_types=1);

namespace Tests;

use
    Fyre\Utility\Math;

trait RoundTest
{

    public function testRound(): void
    {
        $this->assertSame(
            2.0,
            Math::round(1.5)
        );
    }

    public function testRoundWithPrecision(): void
    {
        $this->assertSame(
            1.23,
            Math::round(1.2345, 2)
        );
    }

    public function testRoundWithMode(): void
    {
        $this->assertSame(
            1.0,
            Math::round(1.5, 0, Math::ROUND_HALF_DOWN)
        );
    }

}
